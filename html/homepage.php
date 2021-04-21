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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <?php 
                    session_start();
                    echo $_SESSION['User']."'s Inventory Management"
                ?>
            </a>
            <a class="btn btn-warning" href="#" role="button">Logout</a>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <div class="col-4 border bg-dark">
            <div class="list-group container">
                <a href="#" class="list-group-item list-group-item-action m-3 py-3 bg-light text-success text-center fs-5">ADD INVENTORY</a>
                <a href="#" class="list-group-item list-group-item-action m-3 py-3 bg-light text-success text-center fs-5">DELETE INVENTORY</a>
                <a href="#" class="list-group-item list-group-item-action m-3 py-3 bg-light text-success text-center fs-5">UPDATE INVENTORY</a>
            </div>
            </div>
            <div class="col-8 border bg-dark align-center">
                    <h1 class="text-light text-center"> We need to make add,delete,update</h1>
                    <br>
                    <div class="container-fluid" id="siri-container"></div>
                <audio src="../assets/EnjoyEnjaami.mp3" type="audio/mpeg" class="container-fluid" controls>
                </audio>
            </div>
        </div>
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
    <script src="https://unpkg.com/siriwave/dist/siriwave.umd.min.js"></script>
    <script>
        var siriWave = new SiriWave({
            container: document.getElementById("siri-container"),
            width: 800,
            height: 100,
            style: "ios9",
            autostart: true,
        });
    </script>
</body>
</html>