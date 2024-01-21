<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminCourses</title>
        <link rel="stylesheet" href="Styles/adminCourses.css">
    </head>
    <body>
        <section>
    <?php
    include("../includes/adminHeader.php");
    ?>


<input type="submit" id="add" value="Add new lesson">
<table>
        <tr>
            <th>ID</th>
            <th>LESSON_AUTHOR</th>
            <th>LESSON_TITLE</th>
            <th>LESSON_CAPTION</th>
            <th>LESSON_NOTES</th>
            <th>LESSON_VIDEO</th>
            <th>LESSON_CATEGORY</th>
            <th>LESSON_CLASS</th>
            <th>UPLOADED_AT</th>
            <th>ACTIONS</th>
        </tr>
        <?php
      include("../Connection.php");
      $sql = "SELECT * FROM lesson";
      $result = mysqli_query($con,$sql);
     while ($r = mysqli_fetch_array($result)){
      echo "<tr><td>".$r['ID']."</td><td>".$r['LESSON_AUTHOR']."</td><td>".$r['LESSON_TITLE']."</td><td>".$r['LESSON_CAPTION']."</td><td>".$r['LESSON_NOTES']."</td><td>".$r['LESSON_VIDEO']."</td><td>".$r['LESSON_CATEGORY']."</td><td>".$r['LESSON_LEVEL']."</td><td>".$r['UPLOADED_AT']."</td><td>
      <form action='' method='post' autocomplete='off'>
      <div id='edit' onclick='edit(".$r['ID'].")'>Edit</div>
      <input id='view' onclick='view(".$r['ID'].")' type='submit' value='View' name='View'>
      <input id='delete' type='submit' value='Delete' name='Delete'>
      <input type='hidden' name='record_id' value=".$r['ID']."></td></tr>
      </form>"; 
    }
    if(isset($_POST["Delete"])){  
        $delId=$_POST['record_id'];  
        $del="DELETE FROM Lesson WHERE ID =". $delId;
        $deled= mysqli_query($con,$del);
        exit;
     }
     if(isset($_POST["View"])){
        $viewId= $_POST['record_id'];
        $view="SELECT * FROM Lesson WHERE ID = '$viewId'";
        $viewed=mysqli_query($con,$view);
        while($r=mysqli_fetch_array($viewed)){

              echo "    <form style='background-color:green;' id='viewForm' action='' method='' autocomplete='off'>
            <div>ID: ".$r['ID']."</div>
            <div>LESSON_AUTHOR: ".$r['LESSON_AUTHOR']."</div>
            <div>LESSON_TITLE: ".$r['LESSON_TITLE']."</div>
            <div>LESSON_CAPTION: ".$r['LESSON_CAPTION']."</div>
            <div>LESSON_NOTES: ".$r['LESSON_NOTES']."</div>
            <div>LESSON_VIDEO: ".$r['LESSON_VIDEO']."</div>
            <div>LESSON_CATEGORY: ".$r['LESSON_CATEGORY']."</div>
            <div>LESSON_LEVEL: ".$r['LESSON_LEVEL']."</div>
            <div>UPLOADED: ".$r['UPLOADED_AT']."</div>
            <div id='hideView' name='hide'>X</div>
        </form>
    ";
exit;
}


     }
?>

</table>

<form id="updateForm" action="" method="post" autocomplete='off'>
        <h3>Update lesson</h3>
        <input type='hidden' name='edit_id' id="id">
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
        <option value="Choose category">Choose Class</option>
            <option value="Baby class">Baby class</option>
            <option value="Middle class">Middle class</option>
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
        <label class="notes" for="input">Add notes: <input type="file" name="lessonNotes" value="Notes" accept=".pdf" required></label>
        <label class="video" for="input">Add video: <input type="file" name="lessonVideo" value="Video" accept=".mp4"></label>
        <button id="updateLesson" type="submit" name="update">Update lesson</button>
        <div id="hideEdit" name="hide">X</div>
    </form>
    <?php
    if(isset($_POST['update'])){
        $id=$_POST["edit_id"];
        $lessonTitle = $_POST["lessonTitle"];
        $lessonCategory = $_POST["lessonCategory"];
        $lessonCaption = $_POST["lessonCaption"];
        $lessonNotes = $_POST["lessonNotes"];
        $lessonVideo = $_POST["lessonVideo"];
        $lessonClass = $_POST["class"];
        $update="UPDATE Lesson SET LESSON_TITLE = '$lessonTitle',LESSON_CATEGORY = '$lessonCategory',LESSON_CAPTION = '$lessonCaption',LESSON_NOTES = '$lessonNotes',LESSON_VIDEO = '$lessonVideo',LESSON_LEVEL = '$lessonClass' WHERE ID = '$id'";
        $result=mysqli_query($con,$update);
        exit;
    }
    
    ?>







    <form id="addForm" action="" method="post" autocomplete='off'>
        <h3>Add new lesson</h3>
        <input class="title" type="text" name="lessonTitle" placeholder="Add lesson title" required>
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
        <option value="Choose category">Choose Class</option>
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
        <label class="notes" for="input">Add notes: <input type="file" name="lessonNotes" value="Notes" accept=".pdf" required></label>
        <label class="video" for="input">Add video: <input type="file" name="lessonVideo" value="Video" accept=".mp4"></label>
        <button id="addLesson" type="submit" name="add">Add lesson</button>
        <div id="hideAdd" name="hide">X</div>
    </form>
    <?php
    include("../Connection.php");
    if(isset($_REQUEST["add"])){
        $lessonTitle = $_POST["lessonTitle"];
        $lessonCategory = $_POST["lessonCategory"];
        $lessonCaption = $_POST["lessonCaption"];
        $lessonNotes = $_POST["lessonNotes"];
        $lessonVideo = $_POST["lessonVideo"];
        $lessonClass = $_POST["class"];

        

        $sql = "INSERT INTO Lesson (ID,LESSON_AUTHOR,LESSON_TITLE,LESSON_CAPTION,LESSON_NOTES,LESSON_VIDEO,LESSON_CATEGORY,LESSON_LEVEL) VALUES('', '{$_SESSION['acoount_name']}', '$lessonTitle', '$lessonCaption', '$lessonNotes', '$lessonVideo', '$lessonCategory','$lessonClass')";
        mysqli_query($con, $sql);
    }



    
    ?>

</section>


        <script src="js/adminCourses.js"> </script>
    </body>
</html>