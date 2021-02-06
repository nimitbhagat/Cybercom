function formValidation(){
    var userName = document.forms["myForm"]["uname"].value;
    if (userName == "") {
        alert("Name must be filled out");
        return false;
    }

    var userPass = document.forms["myForm"]["upass"].value;
    if (userPass == "") {
        alert("Password must be filled out");
        return false;
    }

    var userAddress = document.forms["myForm"]["uadd"].value;
    if (userAddress == "") {
        alert("Address must be filled out");
        return false;
    }

    var userGender = document.forms["myForm"]["gender"].value;
    if (userGender == "") {
        alert("Please Select Gender");
        return false;
    }

    var userAge = document.forms["myForm"]["uage"].value;
    if (userAge === "Select Age") {
        alert("Please Select Valid Age");
        return false;
    }

    var userImage = document.forms["myForm"]["uimage"].value;
    if (userImage == "") {
        alert("Please Choose Image");
        return false;
    }

}