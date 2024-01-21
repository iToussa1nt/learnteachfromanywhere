<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignInPage</title>
        <link rel="stylesheet" href="Styles/signIn.css">
    </head>
    <body>

    <?php
        include_once "../includes/header.php";
    ?>
        <section>
            <h1>Sign In</h1>
            <form action="" method="post" autocomplete='off'>
                <input id="email" type="email" name="yourEmail" placeholder="Enter your email" required>
                <input id="password" type="password" name="createdPassword" placeholder="Enter password" required>
                <input class="radios" type="radio" name="role" value="Admin" required>
                <label for="role">Admin</label>
                <input class="radios" type="radio" name="role" value="Teacher" required>
                <label for="role">Teacher</label>
                <input class="radios" type="radio" name="role" value="Student" required>
                <label for="role">Student</label><br>
                <button type="submit" name="logIn">Sign In</button>
            </form>

            <?php

   include("../connection.php");

   if(isset($_POST['logIn'])) {
    $yourEmail = $_POST["yourEmail"];
    $createdPassword = $_POST["createdPassword"];
    $role = $_POST["role"];


    $sql = "SELECT * FROM Credentials WHERE EMAIL = '$yourEmail';";

    $check = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($check);
    if($row['EMAIL'] === $yourEmail && $row['ROLE'] === $role && $row['PASSCODE'] === $createdPassword){
        session_start();
        $_SESSION['account_name']=$row['FULL_NAME'];
        $_SESSION['ROLE'] = $row['ROLE'];

        header("location:../".$role."/".$role."Dashboard.php");
        exit();


    }
    else{
        die("Invalid credentials ");
    }



   }
      

   ?>
            

        </section>


        <?php
        include_once "../includes/Footer.php";
    ?>


<script src="js/signin.js"></script>
    </body>
</html>
