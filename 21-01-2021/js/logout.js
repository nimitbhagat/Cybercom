function logout() {


    var users = [];

    if (localStorage.getItem('users')) {
        users = JSON.parse(localStorage.getItem('users'));
    }



    var d = new Date();
    var date = d.getDate() + "/" + d.getMonth() + 1 + "/" + d.getFullYear();
    var time = d.getHours() + ":" + d.getUTCMinutes() + ":" + d.getSeconds();


    users[sessionStorage.getItem("id")].lout = date + " " + time;
    localStorage.setItem("users", JSON.stringify(users));

    //alert(users[user].lin);


    sessionStorage.clear();
    window.location.replace("/login.html");

}