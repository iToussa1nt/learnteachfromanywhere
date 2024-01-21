document.getElementById('button').addEventListener('click', clicked);
function clicked(){
    if (isValidEmail(document.getElementById('email').value)) {
        prompt("Check your email, and enter the code sent");
        Math.floor(Math.random()+1)
    } else {
        console.log("Invalid email address");
    }
}
function isValidEmail(email) {
    var emailCheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailCheck.test(email);
}


