<?php
      require('./dbconnect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register Users</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <a href="./user-form.php"  class="mt-3 btn btn-warning"><strong>Back</strong></a>
      <h2 class="text-center mt-5">User Details:</h2>
          <table class="table table-striped table-inverse table-responsive">
              <thead class="thead-inverse">
                  <tr>
                      <th>Name</th>
                      <th>Password</th>
                      <th>Address</th>
                      <th>Games</th>
                      <th>Gender</th>
                      <th>Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      
                        $result = mysqli_query($conn,"select * from form1");
                        while($row = mysqli_fetch_array($result)){
                    ?>
                      <tr>
                          <td scope="row"><?php echo $row['name']?></td>
                          <td><?php echo $row['password']?></td>
                          <td><?php echo $row['address']?></td>
                          <td><?php echo $row['game']?></td>
                          <td><?php echo $row['gender']?></td>
                          <td><img height="50" width="50" src="./uploads/<?php echo $row['image']?>" alt="Error.."></td>
                      </tr>

                      <?php
                        }
                      ?>
                  </tbody>
          </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>