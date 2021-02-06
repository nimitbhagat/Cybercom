function formValidation(){
    var name = document.forms["myForm"]["uname"].value;
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    var email = document.forms["myForm"]["uemail"].value;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }

    var subject = document.forms["myForm"]["usubject"].value;
    if (subject == "") {
        alert("Subject Must be Filled out");
        return false;
    }


    var message = document.forms["myForm"]["umessage"].value;
    if (message == "") {
        alert("Message Must be Filled out");
        return false;
    }

}