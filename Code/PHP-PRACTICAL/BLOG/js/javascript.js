function loginValidation() {
    var email = document.forms["loginForm"]["txtEmail"].value;
    var password = document.forms["loginForm"]["txtPassword"].value;
    if (email == "" || password == "") {
        document.getElementById("msg").innerHTML = "Please Fill All The Details";
        return false;
    }
}

function registerValidation() {
    var prefix = document.forms["loginForm"]["ddlPrefix"].value;
    var fname = document.forms["loginForm"]["txtfName"].value;
    var lname = document.forms["loginForm"]["txtlName"].value;
    var email = document.forms["loginForm"]["txtEmail"].value;
    var phone = document.forms["loginForm"]["txtPhone"].value;
    var pass = document.forms["loginForm"]["txtPassword"].value;
    var cpass = document.forms["loginForm"]["txtCPassword"].value;
    var info = document.forms["loginForm"]["txtInfo"].value;
    var tc = document.forms["loginForm"]["chkTC"].value;
    if (tc == true) {
        if (pass == cpass && pass != "" && cpass != "") {
            if (prefix == "" && fname == "" || lname == "" || email == "" || phone == "" || info == "") {
                document.getElementById("msg").innerHTML = "Please Fill All The Details";
                return false;
            }
        } else {
            document.getElementById("msg").innerHTML = "Password Do Not Match";
            return false;
        }
    } else {
        document.getElementById("msg").innerHTML = "Accept Terms And Condition";
        return false;
    }
}


function deleteCategory(element) {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            window.location.href('phptest/manage_category.php');
        }
    }

    xmlhttp.open('GET', 'database/deleteCategory.php?id=' + element.value, true);
    xmlhttp.send();
}