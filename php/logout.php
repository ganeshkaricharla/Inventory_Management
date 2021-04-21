<?php
    session_start();
    unset($_SESSION["Name"]);
    unset($_SESSION["Email"]);
    session_destroy();
    header("Location:../html/loginpage.php");
?>