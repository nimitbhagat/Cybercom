<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript">
        function find() {
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

            xmlhttp.open('GET', 'search.inc.php?search_text=' + document.search.txtSearch.value, true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
    <form id='search' name='search'>
        <input type="text" name="txtSearch" id="txtSearch" onkeydown="find(this);" onkeyup="find(this);" autocomplete="off">
    </form>
    <br>
    <div>
        <table>
            <thead>
                <tr>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            <tbody id='loadData'>
            </tbody>
        </table>
    </div>

</body>

</html>