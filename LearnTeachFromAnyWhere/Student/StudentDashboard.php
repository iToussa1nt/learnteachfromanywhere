<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StudentDashboard</title>
        <link rel="stylesheet" href="Styles/myDashboard.css">
    </head>
    <body>
        <?php
        include("../includes/studentHeader.php");
        ?>



        <section class="body">

            <h1>Welcome student!<?php
                echo $_SESSION['account_name'];
                ?> This is your dashboard</h1>

        </section>

    <?php
    include("../includes/Footer.php");
    ?>


    </body>
</html>

<?php
    include("../Connection.php");
?>