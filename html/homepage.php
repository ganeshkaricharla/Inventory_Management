<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>

<!--Nav bar-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <?php 
                   if(isset($_SESSION['User']))
                   {
                        echo $_SESSION['User']."'s Inventory Management";
                   }
                   else
                   {
                       header("location:loginpage.php");
                   }
                ?>
            </a>
            <a class="btn btn-warning" href="../php/logout.php" role="button">Logout</a>
        </div>
    </nav>




    <div class="container-fluid">
        <div class="row">

            <!--Function's Butt-->
            <div class="col-4 border bg-dark">
                <form action="../php/operations.php" method="post">
                    <button type="submit" class="btn btn-primary container-fluid btn-lg my-3" name = "addbtn">ADD</button>
                    <br>
                    <button type="submit" class="btn btn-primary container-fluid btn-lg my-3" name = "deletebtn">DELETE</button>
                    <br>
                    <button type="submit" class="btn btn-primary container-fluid btn-lg my-3" name = "updatebtn">UPDATE</button>
                    <br>
                </form>
            </div>
            
            <!--Function's Butt Response-->
            <div class="col-8 border bg-dark">
                <?php
                if(@$_GET['Empty']==true)
                {
                    ?>
                        <div class="alert alert-danger text-center container-sm"  role="alert">
                            <?php echo "No Empty Fields." ?>
                        </div>
                <?php
                        }      
                ?>
                <?php
                if(@$_GET['Invalid']==true)
                {
                    ?>
                        <div class="alert alert-danger text-center container-sm"  role="alert">
                            <?php echo "Data Invalid,Please Check" ?>
                        </div>
                <?php
                        }      
                ?>
                <?php
                if(@$_GET['Exists']==true)
                {
                    ?>
                        <div class="alert alert-danger text-center container-sm"  role="alert">
                            <?php echo "Item Already Exists You can Update Values." ?>
                        </div>
                <?php
                        }      
                ?>

                <?php
                if(@$_GET['Inserted']==true)
                {
                    ?>
                        <div class="alert alert-success text-center container-sm"  role="alert">
                            <?php echo "Item Inserted Succesfully." ?>
                        </div>
                <?php
                        }      
                ?>
                <?php
                if(@$_GET['NotInserted']==true)
                {
                    ?>
                        <div class="alert alert-warning text-center container-sm"  role="alert">
                            <?php echo "Item Not Inserted,Try after Sometime." ?>
                        </div>
                <?php
                        }      
                ?>
            <!-- if add button pressed --> 
            <?php
                if(@$_GET['Add']==true)
                {
            ?>
                <!-- add form-->
                <form method="post" action = "../php/additem.php">
                    <div class="row m-4 mt-5">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email" name="email" value ="<?php echo $_SESSION['Email'];?>" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Item Name" name="itemname">
                        </div>
                    </div>
                    <div class="row m-4">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Item Price" name="itemprice">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Item Quantity" name="itemquantity">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-warning col-5 offset-4 center" name="additembtn">Add Item</button>
                </form>
            <?php
                }      
            ?>

            <!-- if Delete button pressed --> 
            <?php
                if(@$_GET['Delete']==true)
                {
            ?>
                <!-- delete form-->
                <form method="post" action = "../php/deleteitem.php">
                    <div class="row m-4 mt-5">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email" name="email" value ="<?php echo $_SESSION['Email'];?>" disabled>
                        </div>
                    </div>

                    <div class="row m-4">
                        <div class="col">
                            <select class="form-select col" aria-label="Default select example" name="itemname">
                                <?php
                                    require_once('../php/connection.php');
                                    $query="select itemname from inventorydb where email = '".$_SESSION['Email']."'";
                                    $result =  mysqli_query($con,$query);
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while ($row =mysqli_fetch_row($result))
                                        {
                                           echo "<option value=".$row[0].">".$row[0]."</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row m-4">
                        <div class="col">
                            <button type="submit" class="btn btn-warning col center" name="deleteitembtn">Delete Item</button>
                        </div>
                    </div>
                    
                </form>
            <?php
                }      
            ?> 


            <!-- if Update button pressed --> 
            <?php
                if(@$_GET['Update']==true)
                {
            ?>
                <!-- Update form-->
                <form method="post" action = "../php/updateitem.php">
                    <div class="row m-4 mt-5">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email" name="email" value ="<?php echo $_SESSION['Email'];?>" disabled>
                        </div>
                        <div class="col">
                            <select class="form-select col" aria-label="Default select example">
                                <?php
                                    require_once('../php/connection.php');
                                    $query="select itemname from inventorydb where email = '".$_SESSION['Email']."'";
                                    $result =  mysqli_query($con,$query);
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while ($row =mysqli_fetch_row($result))
                                        {
                                           echo "<option value=".$row[0].">".$row[0]."</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row m-4">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Item Price" name="itemprice">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Item Quantity" name="itemquantity">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-warning col-5 offset-4 center">Add Item</button>
                </form>
            <?php
                }      
            ?>

            


            </div>



        </div>



        <!-- Query Result inventory data display Table-->
        <div class="row">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">ItemName</th>
                <th scope="col">Item Quantity</th>
                <th scope="col">Item Price</th>
                </tr>
            </thead>
            <tbody>
                
                    <?php
                        require_once('../php/connection.php');
                        $query="select * from inventorydb where email='".$_SESSION['Email']."'";
                        $result =  mysqli_query($con,$query);
                        if(mysqli_num_rows($result)>0)
                        {
                            $rn =1;
                            while ($row =mysqli_fetch_row($result))
                            {
                               echo '<tr>';
                               echo '<th scope ="row">'.$rn.'</th>';
                               echo '<td>'.$row[1].'</td>';
                               echo '<td>'.$row[2].'</td>';
                               echo '<td>'.$row[3].'</td>';
                               $rn = $rn + 1;
                               echo '</tr>';
                            }
                        }
                    ?>
            </tbody>
            </table>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>