function formValidation(){
    
    var userEmail = document.forms["myForm"]["email"].value;
    if (userEmail == "") {
        alert("Please Enter Valid Email");
        return false;
    }


    var userPass = document.forms["myForm"]["password"].value;
    if (userPass == "") {
        alert("Password must be filled out");
        return false;
    }
}