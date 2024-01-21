<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StudentHeader</title>
        <link rel="stylesheet" href="Styles/studentHeader.css">
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
    color: rgb(0, 97, 182);
    text-decoration: none;
}
        </style>
    </head>
    <body>
        <nav>
            <a href="#" id="logo">Learn/Teach From AnyWhere</a>
            <ul id="navList">
                <li><a class="navLink" href="../Student/StudentDashboard.php">My Dashboard</a></li>
                <li><a class="navLink" href="../Student/Courses.php">Courses</a></li>
                <li><a class="navLink" href="../Student/Services.php">Services</a></li>
                <li><a class="navLink" href="../Student/Contact.php">Contact us</a></li>
                <li><a class="navLink" href="../Site/site.php">Log Out</a></li>
                <li><?php
                session_start();
                echo $_SESSION['account_name'];
                ?></li>
            </ul>
        </nav>
        <script src="js/studentHeader.js"></script>
    </body>
</html>