<?php
require('./dbconnect.php');
$msg = "";
$name =  $pass = $add =  $gender = $age = $img = "";
$game = [];

if (isset($_REQUEST['add'])) {
  $name = $_POST['uname'];
  $pass = $_POST['upass'];
  $add = $_POST['uadd'];
  $game = $_POST['game'];
  $gender = $_POST['gender'];
  $age = $_POST['uage'];
  $img = $_FILES['uimage']['name'];

  if (!empty($name) && !empty($pass) && !empty($add) && !empty($game) && !empty($gender) && !empty($age) && !empty($img)) {

    $img = $_FILES['uimage']['name'];
    $tmp_name = $_FILES['uimage']['tmp_name'];
    $path = './uploads/';
    if (move_uploaded_file($tmp_name, './uploads/' . $img)) {

      $data = implode(',', $game);
      $query = "insert into form1(name,password,address,game,gender,age,image)value('$name','$pass','$add','$data','$gender','$age','$img')";

      if (mysqli_query($conn, $query)) {

        $msg = "Sent Successfully";
        header('location:view_all.php');
      } else {
        echo '<strong>Failed</strong>';
      }
    } else {
      echo 'error while uploading Image';
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>User Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <form name="myForm" action="./user-form.php" method="post" enctype="multipart/form-data" required>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3 mt-5">
          <a href="./view_all.php" class="btn btn-primary">View All Users</a>
        </div>
        <div class="col-md-6 col-lg-6 mt-5">
          <div class="card text-left">
            <div class="card-body">
              <h2 class="text-center">User Form</h2>
              <h6><?php echo ($msg); ?></h6>
              <div class="form-group">
                <label for="">Enter Name</label>
                <input type="text" class="form-control" name="uname" id="uname" aria-describedby="emailHelpId" placeholder="Enter Username">
                <small class="form-text  text-danger" id="errname" style="display:none;">Name Is Required*</small>
              </div>
              <div class="form-group">
                <label for="">Enter Password</label>
                <input type="password" class="form-control" name="upass" id="upass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password">
                <small id="errpass" class="form-text text-danger" style="display:none">Password Is Required*</small>
              </div>
              <div class="form-group">
                <label for="">Enter Address</label>
                <textarea class="form-control" name="uadd" id="uadd" aria-describedby="emailHelpId" placeholder="Enter Address"></textarea>
                <small id="erradd" class="form-text text-danger" style="display:none">Address Is Required*</small>
              </div>
              <div class="form-group">
                <fieldset>
                  <legend>Select Game:</legend>
                  <input type="checkbox" name="game[]" value="Hockey"> Hockey <br>
                  <input type="checkbox" name="game[]" value="Football"> Football <br>
                  <input type="checkbox" name="game[]" value="Badminton"> Badminton<br>
                  <input type="checkbox" name="game[]" value="Cricket"> Cricket<br>
                  <input type="checkbox" name="game[]" value="VolleyBall"> VolleyBall<br>
                </fieldset>
              </div>
              <div class="form-group">
                <label for="">Gender:</label><br>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female

                <small id="errgen" class="form-text text-danger" style="display:none">Please Select Gender*</small>
              </div>
              <div class="form-group">
                <label for="">Select Age:</label>
                <select name="uage" id="uage" class="form-control">
                  <option value="Select Age" selected>Select Age</option>
                  <option value="20">20</option>
                </select>
                <small id="errage" class="form-text text-danger" style="display:none">Please Select Valid Age*</small>
              </div>
              <div class="form-group">
                <label for="">Select Your Image:</label>
                <br>
                <input type="file" name="uimage" id="uimage">
                <small id="errimg" class="form-text text-danger" style="display:none">Please Select Image*</small>
                <br>
              </div>
              <div class="form-group">
                <button type="reset" class="btn btn-danger ml-5 pl-5 pr-5">Reset</button>
                <button type="submit" onclick="formValidation()" name="add" class="btn btn-primary ml-5 pl-5 pr-5">Submit Form</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
        </div>
      </div>

      <div class="jumbotron">
        <p class="lead">Name : <?php echo $name ?></p>
        <p class="lead">Password : <?php echo $pass ?></p>
        <p class="lead">Address : <?php echo $add ?></p>
        <p class="lead">Games : <?php
                                foreach ($game as $data) {
                                  echo $data . ",";
                                }
                                ?></p>
        <p class="lead">Gender : <?php echo $gender ?></p>
        <p class="lead">Age : <?php echo $age ?></p>
        <p class="lead">Image : <?php echo $img ?></p>
      </div>

    </div>
  </form>

  <script src="./js/user-form.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>