/* Witnesses Carousel section*/




/* Function to show or hide password on login */
function showPwd() {
    let pwd = document.getElementById('pwd');
    let view = document.querySelector('#lock');

    if(pwd.type === "password") {
        pwd.type = "text";
        view.style.color = "#dc3545";
    }
    else {
        pwd.type = "password";
        view.style.color = "black";
    }
}