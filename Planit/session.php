<?php
if(!empty($_SESSION[UserID])){
    $session_id = $_SESSION[UserID];
    include('class/userClass.php');
    $userClass = new userClass();
}
if(empty($session_id)){
    $url = BASE.URL'home.php';
    header("Location: $url");
}
?>