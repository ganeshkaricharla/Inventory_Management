<?php

    if(isset($_POST['addbtn']))
    {
        header("location:../html/homepage.php?Add= Add Inventory");
    }
    else if(isset($_POST['deletebtn']))
    {
        header("location:../html/homepage.php?Delete= Delete Inventory");
    }
    else if(isset($_POST['updatebtn']))
    {
        header("location:../html/homepage.php?Update= Update Inventory");
    }


?>