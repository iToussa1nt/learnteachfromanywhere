<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminStudents</title>
        <link rel="stylesheet" href="Styles/adminStudents.css">
    </head>
    <body>
    <?php
    include("../includes/adminHeader.php");
    ?>
<section>
<input type="submit" id="add" value="Add new student">
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
      $sql = "SELECT * FROM Credentials WHERE ROLE= 'Student'";
      $result = mysqli_query($con,$sql);
     while ($r = mysqli_fetch_array($result)){
        echo "<tr><td>".$r['ID']."</td><td>".$r['FULL_NAME']."</td><td>".$r['EMAIL']."</td><td>".$r['ROLE']."</td><td>".$r['PASSCODE']."</td><td>".$r['GENDER']."</td><td>".$r['LESSONS']."</td><td>".$r['AGE']."</td><td>
        <form action='' method='post' autocomplete='off'>
        <div id='edit' onclick='edit(".$r['ID'].")'>Edit</div>
        <input id='view' onclick='view(".$r['ID'].")' type='submit' value='View' name='View'>
        <input id='delete' type='submit' value='Delete' name='Delete'>
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
    <h3>Add new student</h3>
                <input id="faullName" type="text" name="fullName" placeholder="Enter full name" required>
                <input id="aemail" type="email" name="yourEmail" placeholder="Enter your email" required>
                <input id="adateOfBirth" type="date" name="dateOfBirth" placeholder="Date of birth">
                <select name="gender" id="agender" required>
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input id="acreatePassword" type="password" name="createdPassword" placeholder="Create password" required>
                <input id="reEnterPassword" type="password" name="passwordRepeat" placeholder="Re-enter password" required>
                <button type="submit" name="register">Add student</button>
                <div id="hideAdd">X</div>
            </form>

            <form id="updateForm" action="" method="post" autocomplete='off'>
                <h3>Update student</h3>
                <input type="hidden" id="edit_id" name='edit_id'>
                <input id="ufullName" type="text" name="fullName" placeholder="Enter full name" required>
                <input id="uemail" type="email" name="yourEmail" placeholder="Enter your email" required>
                <input id="udateOfBirth" type="date" name="dateOfBirth" placeholder="Date of birth">
                <select name="gender" id="gender" required>
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input id="ucreatePassword" type="password" name="createdPassword" placeholder="Create password" required>
                <button type="submit" name="edit">Update student</button>
                <div id="hideEdit">X</div>
            </form>
            <?php
    if(isset($_POST['edit'])){
        $id=$_POST["edit_id"];
        $fullName = $_POST["fullName"];
        $yourEmail = $_POST["yourEmail"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $gender = $_POST["gender"];
        $createdPassword = $_POST["createdPassword"];
        $update="UPDATE Credentials SET FULL_NAME = '$fullName',EMAIL = '$yourEmail',PASSCODE = '$createdPassword',GENDER = '$gender',AGE = '$dateOfBirth' WHERE ID = '$id'";
        $result=mysqli_query($con,$update);
    }
    
    ?>




    </section>



        <script src="js/adminStudent.js"></script>

    </body>
</html>
