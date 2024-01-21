<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TeacherDashboard</title>
        <link rel="stylesheet" href="Styles/myDashboard.css">
    </head>
    <body>

    <?php
        include("../includes/teacherHeader.php");
    ?>

        <section>

            <h1>Welcome Teacher!<?php
                echo $_SESSION['account_name'];
                ?> This is your dashboard</h1>
            <div>
            
            </div>
        </section>



    </body>
</html>