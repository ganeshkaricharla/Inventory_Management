<?php
session_start();
require_once('connection.php');
if(isset($_POST['additembtn']))
{
    
    if(empty($_POST['itemname']) || empty($_POST['itemprice']) || empty($_POST['itemquantity']))
    {
        header("location:../html/homepage.php?Empty= Please Fill all the fields.");
    }
    else
    {
        $query="select * from inventorydb where itemname='".$_POST['itemname']."' and email='".$_SESSION['Email']."'";
        $result =  mysqli_query($con,$query);
        if(mysqli_num_rows($result)!= 0)
        {
            header("location:../html/homepage.php?Exists= Already Exists.");
        }
        else
        {
            $compare ="SELECT * from inventorydb";
            $result2=mysqli_query($con,$compare);
            $sql = "INSERT INTO inventorydb (email,itemname,itemprice,itemquantity) values ('".$_SESSION['Email']."','".$_POST['itemname']."','".$_POST['itemprice']."','".$_POST['itemquantity']."')";
            $result3= mysqli_query($con,$sql);
            $result4=mysqli_query($con,$compare);
            if (mysqli_num_rows($result2) < mysqli_num_rows($result4)){
                header("location:../html/homepage.php?Inserted= Data Inserted");

                }
                else{
                    header("location:../html/homepage.php?NotInserted= Data Not Inserted");
                }
        }
    }
}

?>