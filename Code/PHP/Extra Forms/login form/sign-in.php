<?php
require('./dbconnect.php');
session_start();
$email = $pass = $msg = "";

if (isset($_REQUEST['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];



  if (!empty($email) && !empty($pass)) {
    $query = "select * from formregister where email='$email' and password='$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      print_r($row = mysqli_fetch_array($result));

      $_SESSION['uname'] = $row['email'];
      header('Location:dashboard.php');
    } else {
      $msg = 'Wrong Credentials';
    }
  }
} else {
  $msg = "ERROR!!";
}
?>

<html lang="en">

<head>
  <title>login here..</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <form name="myForm" action="./sign-in.php" method="post" required>
    <div class="container">
      <div class="alert alert-danger text-center mt-3" style="display:none" id="errorDiv" role="alert">
        <h5 class="alert-heading" id="errtext"></h5>
      </div>
      <div class="row pt-5">
        <div class="col-md-3 col-lg-3">
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="card text-left">
            <div class="card-body">
              <h4 class="card-title text-center">Login</h4>
              <p class="card-text">
              </p>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
                <small id="helpId" class="form-text text-muted">Enter Email</small>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password" required="">
                <small id="helpId" class="form-text text-muted">Enter Password</small>
              </div>

              <div class="form-group pb-4">
                <input type="submit" value="Login" onclick="formValidation()" name="login" class="btn btn-primary  btn-block">
              </div>

              <h6><?php echo $msg; ?></h6>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">

        </div>
      </div>
      <div class="jumbotron">

        <h2>Your Credentials:</h2>
        <hr>
        <p class="lead">Email : <?php echo $email; ?></p>
        <p class="lead">Password : <?php echo $pass; ?></p>

      </div>
    </div>
  </form>
  <!--<script src="./js/sign-in.js"></script>-->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>