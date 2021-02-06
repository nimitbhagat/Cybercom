<?php
require('./dbconnect.php');


$fname = $lname = $dob = $gender = $country = $email = $pass = $cpass = $msg = "";

if (isset($_REQUEST['add'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $country = $_POST['ucountry'];
  $email = $_POST['uemail'];
  $pass = $_POST['upass'];
  $cpass = $_POST['ucpass'];

  if (!empty($fname) && !empty($lname) && !empty($dob) && !empty($gender) && !empty($country) && !empty($email) && !empty($pass)) {
    $query = "insert into formregister(fname,lname,dob,gender,country,email,password)value('$fname','$lname','$dob','$gender','$country','$email','$pass')";

    if (mysqli_query($conn, $query)) {
      $msg = "User Register Successfully";
    } else {
      echo mysqli_error($conn);
      $msg = "Failed";
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Sign Up</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <form name="myForm" action="./sign-up.php" method="post" required>

    <div class="container">
      <div class="row ">
        <div class="col-md-3 col-lg-3 mt-5">
          <a href="./view_all.php" class="btn btn-primary">View Resister Users</a>
        </div>
        <div class="col-md-6 col-lg-6 mt-5">
          <div class="card text-left">
            <div class="card-body">
              <h2 class="text-center">Sign Up</h2>
              <h6><?php echo ($msg); ?></h6>
              <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="fname" id="fname" pattern="[a-z]+" title="please Enter Name in Proper Format" placeholder="Enter Username">
                <small id="emailHelpId" class="form-text text-muted">Enter Name</small>
              </div>
              <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname" aria-describedby="emailHelpId" pattern="[a-z]+" title="please Enter  lastName in Proper Format" placeholder="Enter Username">
                <small id="emailHelpId" class="form-text text-muted">Enter Name</small>
              </div>
              <div class="form-group">
                <label for="">Date Of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob" required />
                <small id="emailHelpId" class="form-text text-muted">Select Date Of Birth</small>

              </div>

              <div class="form-group">
                <label for="">Gender:</label><br>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female

                <small id="emailHelpId" class="form-text text-muted">Select Gender</small>
              </div>

              <div class="form-group">
                <label for="">Country:</label><br>
                <select name="ucountry" id="ucountry" class="form-control">
                  <option value="Year" selected>Country</option>
                  <option value="India">India</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Maleshia">Maleshia</option>
                  <option value="Asia">Asia</option>
                </select>
                <small id="emailHelpId" class="form-text text-muted">Select Country</small>
              </div>
              <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" class="form-control" name="uemail" id="uemail" aria-describedby="emailHelpId" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Enter Email In Correct Format" placeholder="Enter Email">
                <small id="emailHelpId" class="form-text text-muted">Enter Email</small>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="upass" id="upass" aria-describedby="emailHelpId" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password">
                <small id="emailHelpId" class="form-text text-muted">Enter Password</small>
              </div>
              <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="ucpass" id="ucpass" aria-describedby="emailHelpId" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password">
                <small id="emailHelpId" class="form-text text-muted">Enter Confirm Password</small>
              </div>
              <div class="form-group text-center">
                <input type="checkbox" name="agreement" id="agreement"> I Accept To The Terms Of Use.
              </div>
              <div class="form-group text-right">
                <button type="submit" name="add" onclick="formValidation()" class="btn btn-primary ml-5 pl-5 pr-5">Submit</button>
                <button type="reset" class="btn btn-danger ml-5 pl-5 pr-5">Cancel</button>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">

        </div>
      </div>
      <div class="jumbotron">
        <p class="lead">Full name : <?php echo $fname . " " . $lname ?></p>
        <p class="lead">Password : <?php echo $pass ?></p>
        <p class="lead">Date Of Birth : <?php echo $dob ?></p>
        <p class="lead">Gender : <?php echo $gender ?></p>
        <p class="lead">Country : <?php echo $country ?></p>
        <p class="lead">Email : <?php echo $email ?></p>
      </div>
    </div>
  </form>
  <script src="./js/sign-up.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>