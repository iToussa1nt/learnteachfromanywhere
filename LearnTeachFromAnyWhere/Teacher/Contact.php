<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ContactTeacher</title>
        <link rel="stylesheet" href="Styles/Contact.css">
    </head>
    <body>

        <?php
            include_once("../includes/teacherHeader.php");
        ?>


<section>
            <form action="" method="post" autocomplete='off'>
                <input class="gett" type="email" name="email" placeholder="Enter your email" required>
                <input class="gett" type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" id="msg" cols="30" rows="10" placeholder="Enter your message" required></textarea>
                <input class="button" type="submit" value="Send" name="Send">
            </form>
        </section>

<?php

    include("../Connection.php");
    if(isset($_REQUEST["Send"])){
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $sql = "INSERT INTO Contact VALUES('','$email','$subject','$message');";
        mysqli_query($con,$sql);
 

    }


?>
      
      
      <?php
            include_once("../includes/Footer.php");
        ?>
    </body>
</html>


