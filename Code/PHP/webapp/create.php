<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Contacts</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="contacts.php"><i class="fa fa-address-book"></i> Contacts</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>Create Contact</h3>
        <hr>
        <div class="form-row">
            <div id="message"></div>
            <div class="form-group col-md-6">
                <label for="txtID">ID</label>
                <input type="text" class="form-control" id="txtID" placeholder="auto" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="txtName">Name</label>
                <input type="text" class="form-control" id="txtName" placeholder="John Doe">
            </div>

            <div class="form-group col-md-6">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" id="txtEmail" placeholder="xyz@example.com">
            </div>
            <div class="form-group col-md-6">
                <label for="txtPhone">Phone</label>
                <input type="tel" class="form-control" id="txtPhone" placeholder="1234567890">
            </div>

            <div class="form-group col-md-6">
                <label for="txtTitle">Name</label>
                <input type="text" class="form-control" id="txtTitle" placeholder="Web Developer">
            </div>

            <div class="form-group col-md-6">
                <label for="txtCreated">Created</label>
                <input type="datetime-local" class="form-control" id="txtCreated" value="<?php echo  date("Y-m-d\TH:i");  ?>" placeholder="Create Date Time" disabled>
            </div>
            <div class="form-group col-md-2">
                <button class="btn btn-success form-control" onclick="createContact();">Create</button>
            </div>

        </div>

    </div>
    <script src="javascript/ajax.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
</body>

</html>