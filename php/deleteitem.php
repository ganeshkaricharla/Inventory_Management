<?php
require_once('connection.php');
session_start();
if(isset(['deleteitembtn'])){
    
   $query1="DELETE FROM inventorydb WHERE itemname='".$_POST['itemname']."'";
   $result1 =  mysqli_query($con,$query1);


}




?>