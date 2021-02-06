

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

    var userStatus = document.forms["myForm"]["mstatus"].value;
    if (userStatus == "") {
        alert("Please Select Marital Status");
        return false;
    }

    var userMonth = document.forms["myForm"]["umonth"].value;
    if (userMonth === "Month") {
        alert("Please Select Valid Month");
        return false;
    }


    var userDay = document.forms["myForm"]["uday"].value;
    if (userDay === "Day") {
        alert("Please Select Valid Day");
        return false;
    }

 
    var userYear = document.forms["myForm"]["uyear"].value;
    if (userYear === "Year") {
        alert("Please Select Valid Year");
        return false;
    }

    var userImage = document.forms["myForm"]["uimage"].value;
    if (userImage == "") {
        alert("Please Choose Image");
        return false;
    }

    var isChecked = !document.getElementById('agreement').checked;
    //console.log(isChecked);
    if(isChecked)
    {
        alert('You must agree to the terms first.');
        return false;
    }   
}