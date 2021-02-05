<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript">
        function insert() {

            name = document.getElementById('txtName').value;
            email = document.getElementById('txtMail').value;
            dob = document.getElementById('txtDob').value;

            parameters = 'name=' + name + '&email=' + email + '&dob=' + dob;

            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('loadData').innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open('POST', 'update.inc.php', true);
            xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xmlhttp.send(parameters);

            setTimeout(() => {
                xmlhttp.open('GET', 'display.inc.php', true);
                xmlhttp.send();
            }, 2000);

        }
    </script>
</head>

<body>
    <center>
        <input type="text" name="txtName" id="txtName" placeholder="Name">
        <input type="email" name="txtMail" id="txtMail" placeholder="Email">
        <input type="date" name="txtDob" id="txtDob" placeholder="Date Of Birth">
        <input type="button" name="btnRegister" id="btnRegister" value="REGISTER" onclick="insert();">
        <br>
        <br>
        <div id="loadError"></div>
        <div id="loadData"></div>
    </center>
</body>

</html>