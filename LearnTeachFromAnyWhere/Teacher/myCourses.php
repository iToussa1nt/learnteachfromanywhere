<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TeacherMyCourses</title>
        <link rel="stylesheet" href="Styles/myCourses.css">
    </head>
    <body>


    <?php

include_once("../includes/teacherHeader.php");

?>
        <section>
        <?php
        include("../Connection.php");
$sql= "SELECT * FROM Lesson WHERE LESSON_AUTHOR ='{$_SESSION['account_name']}'";
$result= mysqli_query($con,$sql);
while($r = mysqli_fetch_array($result)){
    echo "<div class='lesson'>
    <video style='border-radius: 5px;' width='250px' controls>
        <source src='../../files/".$r['LESSON_VIDEO']."' type='video/mp4'>
    </video>
    <div class='Description'>
        <p>".$r['LESSON_TITLE']."</p>
        <p>".$r['LESSON_CAPTION']."</p>
        <input class='readNotes' type='submit' name='readNotes' value='Read notes...''>
        <div class='timeStamp'>".$r['UPLOADED_AT']."</div>
    </div>
    </div>";
}





?>
        </section>






<?php

include_once("../includes/Footer.php");

?>
    </body>
</html>


<?php
    include("../Connection.php");
?>