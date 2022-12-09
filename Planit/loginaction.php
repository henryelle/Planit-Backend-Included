<?php
session_start();    

if(isset($_SESSION["UserID"])){
    $id = $_SESSION["UserID"];
    echo "Welcome, user <script>window.alert('$id')</script>.";
  }
//define('BASEPATH') OR exit ('No direct script access allowed');      
            $user = "hosanna";
            $passworddb = "*";
            $database = "Planit_You";
            $table = "users";

            try {
                $accountname = $_POST['username'];
                $password = $_POST['password'];
                $hash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
                $db = new PDO("mysql:host=localhost;dbname=$database", $user, $passworddb);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT * FROM users WHERE AccountName = :username";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':username', $accountname);
                $stmt->execute();
                // $stmt->bind_result($username, $password);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if(!empty($row)){
                    if (password_verify($password, $row["Pass"])) {
                        $_SESSION["login"] = True;
                        $_SESSION["UserID"] = $row["UserID"];
                        header("Location: ./user");
                        exit();
                     } 
                     else {
                        echo "Incorrect password.";
                    }
                }
                else {
                    echo "Incorrect username.";
                }
               
        }catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          ?>