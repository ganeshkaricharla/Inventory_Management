<?php
$color=$_POST['Color'];
$email=$_POST['Email'];
require_once('connection.php');
session_start();
if(isset($_POST['show']))
{
    if(empty($_POST['Email']) || empty($_POST['color']) )
    {
        header("location:../html/forgotpage.php?isit_empty= Please Fill all the fields.");
    }
    else{
        $query1="Select email,color from logindb WHERE email='".$_POST['Email']."' and color ='".$_POST['color']."'";
        $result1 =  mysqli_query($con,$query1);
        if(mysqli_num_rows($result1)==1){
            
            $data = $result1->fetch_row();
                $pass= $data[2];
                header("location:../html/forgotpage.php?password1= password");
        }
        else{
            header("location:../html/forgotpage.php?Invalid1= The email you have entered is incorrect or You have chosen a wrong color");
        }
    }


}






?>