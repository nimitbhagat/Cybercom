function logout() {
    sessionStorage.clear();
    window.location.replace("/login.html");
}