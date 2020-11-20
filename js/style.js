/* Witnesses Carousel section*/

/* Function to display profile image */
function triggerClick() {
    document.querySelector('#photo').click();
}

function displayImage(e) {
    if(e.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            document.querySelector('#photoDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
        document.getElementById('photo_text').setAttribute('class', 'hideText');
    }
}

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
