<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminMessages</title>
        <link rel="stylesheet" href="Styles/adminMessages.css">
    </head>
    <body>

    <?php
    include("../includes/adminHeader.php");
    ?>

    <div class="container">
        <?php
    include("../Connection.php");
    $sql = "SELECT Credentials.FULL_NAME,Contact.SUBJECT,Contact.MESSAGE,Contact.`COMPOSED AT` FROM Contact,Credentials WHERE Contact.SENDER=Credentials.EMAIL";
    $result = mysqli_query($con,$sql);
   while ($r = mysqli_fetch_array($result)){
    echo "<div class='smcontainer'>
    <div><div>".$r['FULL_NAME']."</div><div style='margin: top 10px;'>".$r['COMPOSED AT']."</div></div><div>
        <p>".$r['SUBJECT']."</p>
        <p>".$r['MESSAGE']."</p>
        <input class='Reply' type='text' placeholder='Reply'><input class='replyButton' type='submit' value='Send'>
    </div>
</div>";
}
?>
    </div>

        
    </body>
</html>