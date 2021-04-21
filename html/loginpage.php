<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Login</a>
        <a class="btn btn-primary" href="../index.php" role="button">Homepage</a>
      </div>
    </nav>

    <?php
          if(@$_GET['Empty']==true)
          {
    ?>
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <?php echo "You should Fill the blanks First." ?>
          </div>
    <?php
          }      
    ?>

    <?php
          if(@$_GET['Invalid']==true)
          {
      ?>
          <div class="alert alert-danger alert-dismissible fade show text-center"  role="alert">
            <?php echo "Check Your Details." ?>
          </div>
      <?php
          }      
    ?>
    <form method="POST" action="../php/login.php">
        <div class="d-flex justify-content-center mt-5" >
        <div >
        <div >
          <label for="Email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="Email">
          <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
        </div>
        <div class="mt-5">
          <label for="Password" class="form-label">Password</label>
          <input type="password" class="form-control" id="Password" name="Password">
        </div>
        <div id="passwordHelp" class="form-text justify-content ml-3 text-muted">
             Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
          <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary mt-3 " name ="submitbtn">Submit</button>
          </div>
          <div class="d-flex justify-content-center mt-3"><a href="forgotpage.php">Forgot Password?</a></div>
          <div class="d-flex justify-content-center mt-3"><a href="registerpage.php">Don't Have an Account? Register Now</a></div>
        </div>
    </div>
      </form>
  </body>
</html>
