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
          if(@$_GET['is_empty']==true)
          {
    ?>
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <?php echo "You should Fill the blanks First." ?>
          </div>
    <?php
          }      
    ?>




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
     <form method="POST" action="../php/register.php"  >
  <div class=" d-flex justify-content-center col-9 mt-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" >
  </div>
  <div class="d-flex justify-content-center mt-5 col-9">
  <div class="mr-5"><label for="exampleInputPassword1" class="form-label">Name</label></div>
    <input type="text" class="form-control" name="Name">
  </div>
  <div class="mb-3 d-flex justify-content-center mt-5  mr-4 col-9">
  <div class="mr-5"> <label  class="form-label">Color</label></div>
    <input type="text" class="form-control" name="Color">
  </div>
  <div class="mb-3 d-flex justify-content-center mt-5 mr-2 col-9">
  <div class="mr-5"> <label for="exampleInputPassword1" class="form-label">Password</label></div>
    <input type="password" class="form-control" name="Password">
  </div> 
  <div class="d-flex justify-content-center mt-5">
  <button type="submit" class="btn btn-primary" name="button1">Submit</button>
  </div>
</form>
  
  </body>
</html>
