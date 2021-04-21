<?php
require_once('connection.php');
session_start();
if(isset($_POST['deleteitembtn']))
{
   if(empty($_POST['itemname']))
   {
      header("location:../html/homepage.php?Empty= Please Fill all the fields.");
   }
   else
   {
      $query1="DELETE FROM inventorydb WHERE itemname='".$_POST['itemname']."'and  email ='".$_SESSION['Email']."'";
      $result1 =  mysqli_query($con,$query1);
      header("location:../html/homepage.php?Inserted= Data Deleted");
   }
}




?>