<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>

    <script type="text/javascript">
        function load() {
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

            xmlhttp.open('GET', 'include.inc.php', true);
            xmlhttp.send();
        }
    </script>

</head>

<body>

    <input type="submit" value="Click Me" onclick="load();">

    <div id='loadData'></div>
</body>

</html>