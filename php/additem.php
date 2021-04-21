<?php
session_start();
require_once('connection.php');
if(isset($_POST['registerbtn']))
{
    
    if(empty($_POST['email']) || empty($_POST['itemname']) || empty($_POST['itemprice']) || empty($_POST['colo9']) )
    {
        header("location:../html/homepage.php?Empty= Please Fill all the fields.");
    }
    else
    {
        $query="select email,name,password,color from logindb where email='".$_POST['Email']."'";
        $result =  mysqli_query($con,$query);
        if(mysqli_num_rows($result)!= 0)
        {
            echo "User Already exists!!";
        }
        else
        {
            $compare ="SELECT * from logindb";
            $result2=mysqli_query($con,$compare);
            $sql = "INSERT INTO logindb (email,name,password,color) values ('$email','$name','$password','$color')";
            $result3= mysqli_query($con,$sql);
            $result4=mysqli_query($con,$compare);
            if (mysqli_num_rows($result2) < mysqli_num_rows($result4)){
                echo "You are Registered Successfully.Please login with your details from login page";
                }
                else{
                echo "Error: ". $sql ." ". $conn->error;
                }
        }
    }
}

?>