<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StudentServices</title>
        <link rel="stylesheet" href="Styles/Services.css">
    </head>
    <body>
        
        <?php
            include_once("../includes/studentHeader.php");
        ?>

        <section>
            <?php
            include("../Connection.php");
            $sql="SELECT * FROM Services";
            $result= mysqli_query($con,$sql);
            while($r=mysqli_fetch_array($result)){
                echo "
                <div class='provided'>
                <div class='icon'>
                    <img src='../vehicle.png' alt=''>
                </div>
                <div class='context'>
                    <h1>".$r['SERVICE_TIITLE']."</h1>
                    <P>".$r['SERVICE_DESCRIPTION']."</P> 
                </div>
            </div>";

            }
?>      </section>


            <?php
            include_once("../includes/Footer.php");
        ?>
    </body>
</html>