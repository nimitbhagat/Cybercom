<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>

    <script type="text/javascript">
        function load(id,file) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById(id).innerHTML = xmlhttp.responseText;
                }
            }

            xmlhttp.open('GET', file, true);
            xmlhttp.send();
        }
    </script>

</head>

<body>

    <input type="submit" value="Click Me" onclick="load('loadData','include.inc.php');">

    <div id='loadData'></div>
</body>

</html>