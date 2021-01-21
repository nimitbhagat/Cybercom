function logout() {
    sessionStorage.clear();
    window.location.replace("/login.html");


    var loginSession = [];


    if (localStorage.getItem('logs')) {
        loginSession = JSON.parse(localStorage.getItem('logs'));
    }

    localStorage
}