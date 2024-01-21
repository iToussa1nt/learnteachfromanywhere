<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lesson</title>
        <link rel="stylesheet" href="Styles/Lesson.css">
    </head>
    <body>
        <?php
        include_once("../includes/header.php");
        ?>
        <section>
            <div class="classes">
                <form action="Lesson.php" method="post">
                <input type="submit" name="lessonclass" value="Baby class">
                <input type="submit" name="lessonclass" value="Middle class">
                <input type="submit" name="lessonclass" value="Top class">
                <input type="submit" name="lessonclass" value="Primary 1">
                <input type="submit" name="lessonclass" value="Primary 2">
                <input type="submit" name="lessonclass" value="Primary 3">
                <input type="submit" name="lessonclass" value="Primary 4">
                <input type="submit" name="lessonclass" value="Primary 5">
                <input type="submit" name="lessonclass" value="Primary 6">
                <input type="submit" name="lessonclass" value="Senior 1">
                <input type="submit" name="lessonclass" value="Senior 2">
                <input type="submit" name="lessonclass" value="Senior 3">
                <input type="submit" name="lessonclass" value="Senior 4">
                <input type="submit" name="lessonclass" value="Senior 5">
                <input type="submit" name="lessonclass" value="Senior 6">
                <input type="submit" name="lessonclass" value="Year 1">
                <input type="submit" name="lessonclass" value="Year 2">
                <input type="submit" name="lessonclass" value="Year 3">
                <input type="submit" name="lessonclass" value="Year 4">
                </form>
            </div>
            <div class="courses">
                <div class="searchDiv">
                    <div style="flex: 1;">
                    <?php
    include("../Connection.php");
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['lessonCategory'])) {
            $lessonCategory = $_POST['lessonCategory'];
            $_SESSION['LESSON_CATEGORY']=$lessonCategory;
            $codes="SELECT LESSON_TITLE,LESSON_CAPTION,LESSON_NOTES,LESSON_VIDEO,UPLOADED_AT FROM Lesson WHERE LESSON_CATEGORY='{$_SESSION['LESSON_CATEGORY']}'";
            
            
        
        }

            echo "<h3>".$_SESSION['LESSON_CATEGORY']."</h3>";
       
            if (isset($_POST['lessonclass'])) {
                $lessonClass = $_POST['lessonclass'];
                $_SESSION['LESSON_CLASS']=$lessonClass;
                $codes="SELECT LESSON_TITLE,LESSON_CAPTION,LESSON_NOTES,LESSON_VIDEO,UPLOADED_AT FROM Lesson WHERE LESSON_CATEGORY='{$_SESSION['LESSON_CATEGORY']}' AND LESSON_LEVEL='{$_SESSION['LESSON_CLASS']}'";
                
            }
            $_SESSION['RESULT'] = mysqli_query($con,$codes);
        }





    ?>
                    </div>
                    <div id="searchDiv">
                        <input class="search" type="search" placeholder="Search">
                        <img class="searchIcon" src="../icons/search.png" alt="">
                    </div>
                </div>
                <div id="Lessons">
                    
<?php
while($r = mysqli_fetch_array($_SESSION['RESULT'])){
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
                </div>
            </div>
        </section>


        <?php
        include_once("../includes/Footer.php");
        ?>
    </body>
</html>
