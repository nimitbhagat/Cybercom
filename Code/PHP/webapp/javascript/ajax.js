var n, e, p, t, c;



function deleteContact(element) {
    parameters = 'id=' + element.value;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //document.getElementById('message').innerHTML = parameters; //xmlhttp.responseText;
            fetchContacts();
        }
    }
    xmlhttp.open('POST', 'database/delete.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(parameters);
}

function fetchContacts() {

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('data').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open('GET', 'database/fetchRecord.php', true);
    xmlhttp.send();
}

function createContact() {

    var d = new Date("Y");
    alert(d);

    if (check()) {
        var d = new Date();
        n = document.getElementById('txtName').value;
        e = document.getElementById('txtEmail').value;
        p = document.getElementById('txtPhone').value;
        t = document.getElementById('txtTitle').value;
        c = document.getElementById('txtCreated').value;

        clear();

        parameters = "name=" + n + "&email=" + e + "&phone=" + p + "&title=" + t + "&created=" + c;
        //alert(parameters);

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                document.getElementById('message').innerHTML = xmlhttp.responseText;

            }
        }

        xmlhttp.open('POST', 'database/insert.php', true);
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.send(parameters);

    } else {
        document.getElementById('message').innerHTML = "Please Fill All The Details";
    }
}

function check() {
    n = document.getElementById('txtName').value;
    e = document.getElementById('txtEmail').value;
    p = document.getElementById('txtPhone').value;
    t = document.getElementById('txtTitle').value;
    c = document.getElementById('txtCreated').value;

    //alert(n + "<br>" + e + "<br>" + p + "<br>" + t + "<br>" + c);

    if (n != "" && e != "" && p != "" && t != "" && c != "") {
        //alert(n + "<br>" + e + "<br>" + p + "<br>" + t + "<br>" + c);
        return true;
    }
}

function clear() {
    var d = new Date("Y");
    alert(d);
    document.getElementById('txtName').value = "";
    document.getElementById('txtEmail').value = "";
    document.getElementById('txtPhone').value = "";
    document.getElementById('txtTitle').value = "";
    document.getElementById('txtCreated').value = "";
}