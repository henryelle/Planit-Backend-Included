<?php
//Start session
    session_start():
//Destroy session
    unset($_SESSION['UserID']);
    session_destroy();
    header("Location: ./login.php");
?>