<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload</title>
        <link rel="stylesheet" href="Styles/Upload.css">
    </head>
    <body>

        <?php

            include_once("../includes/teacherHeader.php");

        ?>

        <section>
            <h1>Create lesson</h1>
            <form action="" method="post" autocomplete="off">
                <input id="title" type="text" name="lessonTitle" placeholder="Add lesson title" required>
                <select name="lessonCategory" id="category">
                    <option value="Choose category">Choose category</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Biology">Biology</option>
                    <option value="History">History</option>
                    <option value="Geography">Geography</option>
                    <option value="English">English</option>
                    <option value="Kinyarwanda">Kinyarwanda</option>
                    <option value="French">French</option>
                    <option value="Kiswahili">Kiswahili</option>
                    <option value="Computer science">Computer science</option>
                    <option value="Other category">Other category</option>
                </select>
                <select name="class" id="class">
                <option value="">Choose Class</option>
                    <option value="MBaby class">Baby class</option>
                    <option value="PMiddle class">Middle class</option>
                    <option value="Top class">Top class</option>
                    <option value="Primary 1">Primary 1</option>
                    <option value="Primary 2">Primary 2</option>
                    <option value="Primary 3">Primary 3</option>
                    <option value="Primary 4">Primary 4</option>
                    <option value="Primary 5">Primary 5</option>
                    <option value="Primary 6">Primary 6</option>
                    <option value="Senior 1">Senior 1</option>
                    <option value="Senior 2">Senior 2</option>
                    <option value="Senior 3">Senior 3</option>
                    <option value="Senior 4">Senior 4</option>
                    <option value="Senior 5">Senior 5</option>
                    <option value="Senior 6">Senior 6</option>
                    <option value="Year 1">Year 1</option>
                    <option value="Year 2">Year 2</option>
                    <option value="Year 3">Year 3</option>
                    <option value="Year 4">Year 4</option>
                </select>
                <textarea name="lessonCaption" id="caption" cols="60" rows="10" placeholder="Add caption" required></textarea>
                <label class="notes" for="input">Add notes: <input type="file" name="lessonNotes" accept=".pdf" required></label>
                <label class="video" for="input">Add video: <input type="file" name="lessonVideo" accept=".mp4"></label>
                <button type="submit" name="upload">Upload</button>
            </form>

            <?php

    include("../Connection.php");
    if(isset($_REQUEST["upload"])){
        $lessonTitle = $_POST["lessonTitle"];
        $lessonCategory = $_POST["lessonCategory"];
        $lessonCaption = $_POST["lessonCaption"];
        $lessonNotes = $_POST["lessonNotes"];
        $lessonVideo = $_POST["lessonVideo"];
        $lessonClass = $_POST["class"];

        

        $sql = "INSERT INTO Lesson VALUES('', '{$_SESSION['account_name']}', '$lessonTitle', '$lessonCaption', '$lessonNotes', '$lessonVideo', '$lessonCategory','$lessonClass','')";
        $result = mysqli_query($con, $sql);
        if(!$result){
            die("The lesson is not successfully uploaded due to: ". mysqli_connect_error($con));
        }
        else{
            echo "The lesson is successfully uploaded";
            exit();
        }
        
 

    }


?>
        </section>


        <?php

            include_once("../includes/Footer.php");

        ?>




    </body>
</html>
