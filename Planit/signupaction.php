<?php
session_start(); 
// defined('BASEPATH') OR exit ('No direct script access allowed');          
            $user = "hosanna";
            $passworddb = "*";
            $database = "Planit_You";
            $table = "users";
            try {
                $db = new PDO("mysql:host=localhost;dbname=$database", $user, $passworddb);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $accountname = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];

                //Check if the user exists
                $user_check = "SELECT COUNT(AccountName) AS num FROM users WHERE AccountName= :username";
                $stmt = $db->prepare($user_check);
                $stmt->bindValue(':username', $accountname);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if($row['num']>0){
                    $_SESSION['Exists'] = TRUE;
                    header("Location: ./signup.php");
                }
                else{
                        $sql = "INSERT INTO users (UserID, AccountName, FirstName, LastName, Pass, Email) VALUES (?,?,?,?,?,?)";
                        $stmt= $db->prepare($sql);
                        $stmt->execute(['0',$accountname, $firstname, $lastname, $password,$email]);
                        $_SESSION["login"] = True;
                        header("Location: ./user");
                        exit();
                } 
            }
            catch (PDOException $e) {
                header("Location: /");
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }            
                
          ?>
<?php/*      
session_start();          
            $user = "hosanna";
            $passworddb = "gillian";
            $database = "Planit_You";
            $table = "users";

            try {
                $accountname = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $db = new PDO("mysql:host=localhost;dbname=$database", $user, $passworddb);
                $sql = "INSERT INTO users (UserID, AccountName, FirstName, LastName, Pass, Email) VALUES (?,?,?,?,?,?)";
                $stmt= $db->prepare($sql);
                $stmt->execute(['0',$accountname, $firstname, $lastname, $password,$email]);
                $_SESSION["login"] = True;
                header("Location: ./user");
                exit();
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          */?>