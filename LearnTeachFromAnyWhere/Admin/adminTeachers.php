<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminTeachers</title>
        <link rel="stylesheet" href="Styles/adminTeachers.css">
    </head>
    <body>
    <?php
    include("../includes/adminHeader.php");
    ?>

<input type="submit" id="add" value="Add new teacher">
            <table>
        <tr>
            <th>ID</th>
            <th>FULL_NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
            <th>PASSCODE</th>
            <th>GENDER</th>
            <th>LESSONS</th>
            <th>DATE_OF_BIRTH</th>
            <th>ACTIONS</th>
        </tr>

        <?php
      include("../Connection.php");
      $sql = "SELECT * FROM Credentials WHERE ROLE= 'Teacher'";
      $result = mysqli_query($con,$sql);
     while ($r = mysqli_fetch_array($result)){
        echo "<tr><td>".$r['ID']."</td><td>".$r['FULL_NAME']."</td><td>".$r['EMAIL']."</td><td>".$r['ROLE']."</td><td>".$r['PASSCODE']."</td><td>".$r['GENDER']."</td><td>".$r['LESSONS']."</td><td>".$r['AGE']."</td><td>
        <form action='' method='post' autocomplete='off'>
        <div id='edit' onclick='edit(".$r['ID'].")'>Edit</div>
        <input id='view' onclick='view(".$r['ID'].")' type='submit' value='View' name='View'>
        <input id='delete' onclick='remove(".$r['ID'].")' type='submit' value='Delete' name='Delete'>
        <input type='hidden' name='record_id' value=".$r['ID']."></td></tr>
        </form>";
     }
     if(isset($_POST["Delete"])){  
        $delId=$_POST['record_id'];  
        $del="DELETE FROM Credentials WHERE ID =". $delId;
        $deled= mysqli_query($con,$del);
     }



     if(isset($_POST["View"])){
        $viewId= $_POST['record_id'];
        $view="SELECT * FROM Credentials WHERE ID = '$viewId'";
        $viewed=mysqli_query($con,$view);
        while($r=mysqli_fetch_array($viewed)){

              echo "
              <form id='viewForm' action='' method=''>
              <div>ID: ".$r['ID']."</div>
              <div>FULL_NAME: ".$r['FULL_NAME']."</div>
              <div>EMAIL: ".$r['EMAIL']."</div>
              <div>ROLE: ".$r['ROLE']."</div>
              <div>PASSCODE: ".$r['PASSCODE']."</div>
              <div>GENDER: ".$r['GENDER']."</div>
              <div>LESSONS: ".$r['LESSONS']."</div>
              <div>DATE_OF_BIRTH: ".$r['AGE']."</div>
              <div id='hideView' name='hide'>X</div>
          </form>
    ";}


     }

?>
</table>
<form id="addForm" action="" method="post" autocomplete='off'>
    <h3>Add new teacher</h3>
                <input id="fullName" type="text" name="fullName" placeholder="Enter full name" required>
                <input id="email" type="email" name="yourEmail" placeholder="Enter your email" required>
                <input id="dateOfBirth" type="date" name="dateOfBirth" placeholder="Date of birth">
                <select name="gender" id="gender" required>
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input id="createPassword" type="password" name="createdPassword" placeholder="Create password" required>
                <input id="reEnterPassword" type="password" name="passwordRepeat" placeholder="Re-enter password" required>
                <div id="lessons">
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Mathematics">Mathematics</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Physics">Physics</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Biology">Biology</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Chemitry">Chemistry</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="English">English</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="French">French</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Kinyarwanda">Kinyarwanda</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Kiswahili">Kiswahili</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="History">History</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Geography">Geography</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Entrepreneurship">Entreprneurship</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Computer science">Computer science</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Other lessons">Other lessons</label>
                </div>
                <button type="submit" name="register">Add teacher</button>
                <div id="hideAdd">X</div>
            </form>

            <form id="updateForm" action="" method="post" autocomplete='off'>
                <h3>Update a teacher</h3>
                <input type="hidden" id="record_id" name="edit_id">
                <input id="fullName" type="text" name="fullName" placeholder="Enter full name" required>
                <input id="email" type="email" name="yourEmail" placeholder="Enter your email" required>
                <input id="dateOfBirth" type="date" name="dateOfBirth" placeholder="Date of birth">
                <select name="gender" id="gender" required>
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input id="createPassword" type="password" name="createdPassword" placeholder="Create password" required>
                <div id="lessons">
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Mathematics">Mathematics</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Physics">Physics</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Biology">Biology</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Chemitry">Chemistry</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="English">English</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="French">French</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Kinyarwanda">Kinyarwanda</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Kiswahili">Kiswahili</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="History">History</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Geography">Geography</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Entrepreneurship">Entreprneurship</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Computer science">Computer science</label>
                <label for="checkbox"><input class="checkboxes" type="checkbox" name="lesson[]" value="Other lessons">Other lessons</label>
                </div>
                <button type="submit" name="edit">Update a teacher</button>
                <div id="hideEdit">X</div>
            </form>

            <?php
    if(isset($_POST['edit'])){
        $id=$_POST["edit_id"];
        $fullName = $_POST["fullName"];
        $yourEmail = $_POST["yourEmail"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $gender = $_POST["gender"];
        if (isset($_POST['lesson']) && is_array($_POST['lesson'])) {
            
            $selectedLessons = array_map('htmlspecialchars', $_POST['lesson']);
        } 
        $createdPassword = $_POST["createdPassword"];
        $update="UPDATE Credentials SET FULL_NAME = '$fullName',EMAIL = '$yourEmail',PASSCODE = '$createdPassword',LESSONS='".implode(', ', $selectedLessons)."',GENDER = '$gender',AGE = '$dateOfBirth' WHERE ID = '$id'";
        $result=mysqli_query($con,$update);
    }
    
    ?>


            <form id="viewForm" action="" method="">
        <div>ID:</div>
        <div>FULL_NAME: </div>
        <div>EMAIL: </div>
        <div>ROLE:</div>
        <div>PASSCODE:</div>
        <div>GENDER:</div>
        <div>LESSONS:</div>
        <div>DATE_OF_BIRTH:</div>
        <div id="hideView" name="hide">X</div>
    </form>




        <script src="js/adminTeacher.js">

        </script>
    </body>
</html>