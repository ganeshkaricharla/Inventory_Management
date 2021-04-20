<?php
require_once('connection.php');
session_start();
    if(isset($_POST['submitbtn']))
    {
        if(empty($_POST['Email']) || empty($_POST['Password']))
        {
            header("location:../html/loginpage.php?Empty= Please Fill all the fields.");
        }
        else
        {
            $query="select email,password,name from logindb where email='".$_POST['Email']."' and password ='".$_POST['Password']."'";
            $result =  mysqli_query($con,$query);
            if(mysqli_num_rows($result) == 1)
            {
                $data = $result->fetch_row();
                $_SESSION['User'] = $data[2];
                $_SESSION['Email'] = $data[0];
                header("location:../html/homepage.php");
            }
            else
            {
                header("location:../html/loginpage.php?Invalid= Enter Correct Details");
            }
        }
    }
    else
    {
        echo "Error Please Refresh and Login with Your Credientials";
    }
?>
