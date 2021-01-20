

function check(){
    
    //email validation
    function validateEmail(mail) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(mail))
        {
            document.getElementById('helpIdemail').style.display = 'block';
        }
    }
    
    var email = document.getElementById('email').value;
    validateEmail(email)

    ///email match with re-enter email

    var reemail = document.getElementById('re-email').value;
    if(email != reemail){
        document.getElementById('helpIdreemail').style.display = 'block';
    }
    

    //password validation
    function validatePass(pass){
        const regexpass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        if(!regexpass.test(pass)){
            document.getElementById('helpIdpass').style.display = 'block';
        }
    }

    var pass = document.getElementById('pass').value;
    validatePass(pass);

    //password match with re-enter password 

    var repass = document.getElementById('re-pass').value;
    if(pass != repass){
        document.getElementById('helpIdrepass').style.display = 'block';
    }

    //contact field based on selection of mobile and telephone
    var phone = document.getElementById('cont_type').value;

    if(phone === "Mobile")
    {
        document.getElementById('contact').maxLength = 10;
    }
    else{
        document.getElementById('contact').maxLength = 7;
    }



    //birthdate validation

    var month =  document.getElementById('month').value;
    
    if(month === "Month")
    {
        document.getElementById('helpIdmon').style.display='block';
    }
    var day =  document.getElementById('day').value;
    
    if(day === "Day")
    {
        document.getElementById('helpIdday').style.display='block';
    }

    var year =  document.getElementById('year').value;
    
    if(year === "Year")
    {
        document.getElementById('helpIdyear').style.display='block';
    }


    //gender validation
    var gender =  document.getElementById('gender').value;
    
    if(gender === "Choose A Gender")
    {
        document.getElementById('helpIdgen').style.display='block';
    }


    //security question validation
    var securityqsn =  document.getElementById('security-qsn').value;
    
    if(securityqsn === "Choose a Security Question")
    {
        document.getElementById('helpIdsecQ').style.display='block';
    }


  

}

