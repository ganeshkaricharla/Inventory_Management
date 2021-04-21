
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
          if(@$_GET['isit_empty']==true)
          {
    ?>
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <?php echo "You should Fill the blanks First." ?>
          </div>
    <?php
          }      
    ?>
    <?php
          if(@$_GET['Invalid1']==true)
          {
    ?>
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <?php echo "The email you have entered is incorrect or You have chosen a wrong color" ?>
          </div>
    <?php
          }      
    ?>
    <?php
          session_start();
          require_once('../php/connection.php');
          if(@$_GET['password1']==true)
          {
            echo '<div class="alert alert-success container-sm" role="alert">Your Password is "'.$_SESSION['pass'].'". Please Remember it now! <a href="loginpage.php">Login Here</a></div>';
            }
      ?>

      <form method="POST" action="../php/forgot.php">
            <div class="d-flex justify-content-center ml-5 my-5">
                  <div class="row">
                        <div class="col-9">
                              <p>
                                    Please enter your email address below and we will display your password if the color you chose is right.
                              </p>
                              <label for="Email" class="form-label">Email Address</label> <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="Email"><br>
                              <div class="mt-4">
                              <label class="form-lable">Color</label>
                              <input type="text" class="form-control" name="color"><br>
                              <button type="submit" class="btn btn-primary mt-3 " name ="show">Show</button>
                              
                        </div>
                  </div>
            </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


