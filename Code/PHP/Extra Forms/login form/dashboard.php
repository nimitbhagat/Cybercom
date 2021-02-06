<?php
require('./dbconnect.php');
session_start();

if(isset($_REQUEST['logout'])){
    header('Location:logout.php');
}

if(!isset($_SESSION['uname']))
{
   header('location:sign-in.php');
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
  <form name="myForm" method="post" required>
    <div class="container">
       <div class="jumbotron">
           <h1>Welcome!</h1><h2><?php echo $_SESSION['uname']; ?></h2>
           <p class="lead">You are Successfully Loggedin</p>
           <hr class="my-2">
           <p>More info</p>
           <p class="lead">
               <button type="submit" class="btn btn-primary btn-lg" href="Jumbo action link" name="logout">Logout</button>
           </p>
       </div>
    </div>
    </form>
    <script src="./js/sign-in.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>