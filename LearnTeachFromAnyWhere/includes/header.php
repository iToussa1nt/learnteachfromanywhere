<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NonAccountHeader</title>
        <style>
            body{
    cursor: default;
}
nav{
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    background-color: rgb(0, 20, 37);
    z-index: 10;
    color: whitesmoke;
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}
#navList{
    display: flex;
    margin-right: 20px;
}
#navList li{
    list-style-type: none;
}
#navList li a{
    margin: 0 20px;
    padding: 10px;
    color: whitesmoke;
    font-weight: 600;
    text-decoration: none;
}
#navList li a:hover{
    transition: 0.3s;
    border-bottom: 2px solid #0088ff;
}
#logo{
    font-size: 25px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: rgb(0, 105, 196);
    text-decoration: none;
}
        </style>
    </head>
    <body>
        <nav>
            <a href="#" id="logo">Learn/Teach From AnyWhere</a>
            <ul id="navList">
                <li><a class="navLink" href="../Site/Site.php">Home</a></li>
                <li><a class="navLink" href="../Site/Courses.php">Courses</a></li>
                <li><a class="navLink" href="../Site/Services.php">Services</a></li>
                <li><a class="navLink" href="../LoginRegister/SignUp.php">Sign Up</a></li>
                <li><a class="navLink" href="../LoginRegister/SignIn.php">Sign In</a></li>
            </ul>
        </nav>
        <?php session_start(); ?>
        <script>
            var currentClicked = null;
function navLinkClicked(ev) {
    if (currentClicked !== null) {
        currentClicked.style.color = 'whitesmoke';
    }
    currentClicked = ev.currentTarget;
    currentClicked.style.color = '#0088ff';
}
let navLinks=document.getElementsByClassName('navLink');
for(let i = 0; i < navLinks.length; i++){
    navLinks[i].addEventListener('click', navLinkClicked);
}
        </script>
    </body>
</html>