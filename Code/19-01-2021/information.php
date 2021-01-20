
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    
    
    <h2 class="text-center pt-3">..Your Form Data..</h2>
    <div class="table-content pt-5">

    </div>
    <form action="./html_practice_8.html">
    <button class="btn btn-warning">Go Back</button>
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">First Name</th>
          <td><?php echo $_POST['firstname']; ?></td>
        </tr>
        <tr>
          <th scope="col">Last Name</th>
          <td><?php echo $_POST['lastname']; ?></td>
        </tr>
        <tr>
          <th scope="col">Date Of Birth</th>
          <td><?php echo $_POST['month'].' , '.$_POST['day'].'/'.$_POST['year']; ?></td>
        </tr>
        <tr>
          <th scope="col">Gender</th>
          <td><?php echo $_POST['gender']; ?></td>
        </tr>
        <tr>
          <th scope="col">Email</th>
          <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
          <th scope="col">Password</th>
          <td><?php echo $_POST['pass']; ?></td>
        </tr>
        <tr>
          <th scope="col">Security Question</th>
          <td><?php echo $_POST['security-qsn']; ?></td>
        </tr>
        <tr>
          <th scope="col">Security Answer</th>
          <td><?php echo $_POST['security-ans']; ?></td>
        </tr>
        <tr>
          <th scope="col">Address</th>
          <td><?php echo $_POST['address']; ?></td>
        </tr>
        <tr>
          <th scope="col">City</th>
          <td><?php echo $_POST['city']; ?></td>
        </tr>
        <tr>
          <th scope="col">State</th>
          <td><?php echo $_POST['state']; ?></td>
        </tr>
        <tr>
          <th scope="col">Contact</th>
          <td><?php echo $_POST['contact']; ?></td>
        </tr>
      </thead>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>