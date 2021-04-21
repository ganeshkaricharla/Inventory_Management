<?php
session_start();
require_once('connection.php');
if(isset($_POST['updateitembtn']))
{
    
    if(strlen($_POST['itemprice'])==0 && strlen($_POST['itemquantity'])==0)
    {
        header("location:../html/homepage.php?Empty= Please Fill all the fields.");
    }
    else if(strlen($_POST['itemprice'])==0 && strlen($_POST['itemquantity'])>0)
    {
        $query=  "UPDATE inventorydb SET itemquantity='".$_POST['itemquantity']."' where itemname='".$_POST['itemname']."' and email='".$_SESSION['Email']."'";
        $result =  mysqli_query($con,$query);
        header("location:../html/homepage.php?Inserted= Data Inserted");
    }
    else if(strlen($_POST['itemprice'])>0 && strlen($_POST['itemquantity'])==0)
    {
        $query="UPDATE inventorydb set itemprice='".$_POST['itemprice']."' where itemname='".$_POST['itemname']."' and email='".$_SESSION['Email']."'";
        $result =  mysqli_query($con,$query);
        header("location:../html/homepage.php?Inserted= Data Inserted");
    }
    else if(strlen($_POST['itemprice'])>0 && strlen($_POST['itemquantity'])>0)
    {
        $query="UPDATE inventorydb set itemprice='".$_POST['itemprice']."',itemquantity='".$_POST['itemquantity']."' where itemname='".$_POST['itemname']."' and email='".$_SESSION['Email']."'";
        $result =  mysqli_query($con,$query);
        header("location:../html/homepage.php?Inserted= Data Inserted");
    }
}

?>