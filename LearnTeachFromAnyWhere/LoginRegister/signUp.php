<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUpPage</title>
        <link rel="stylesheet" href="Styles/signUp.css">
    </head>
    <body>

    <?php
        include_once "../includes/header.php";
    ?>
        <section>
            <h1>Sign Up</h1>
            <form action="" method="post" autocomplete='off'>
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
                <input id="radioTeacher" type="radio" name="role" value="Teacher" required>
                <label for="role">Teacher</label>
                <input id="radioStudent" type="radio" value="Student" name="role" required>
                <label for="role">Student</label><br>

                <button type="submit" name="register">Sign Up</button>
            </form>
            <?php
    include("../Connection.php");

    if(isset($_REQUEST["register"])){
        $role = $_POST["role"];
        $fullName = $_POST["fullName"];
        $yourEmail = $_POST["yourEmail"];
        $createdPassword = $_POST["createdPassword"];
        $passwordRepeat = $_POST["passwordRepeat"];
        $gender = $_POST["gender"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $hashedPassword= password_hash($createdPassword, PASSWORD_DEFAULT);
        if (isset($_POST['lesson']) && is_array($_POST['lesson'])) {
            
            $selectedLessons = array_map('htmlspecialchars', $_POST['lesson']);
        }
            
                $check = "SELECT * FROM Credentials WHERE EMAIL = '$yourEmail';";
                $resulted = mysqli_query($con,$check);
                $checked = mysqli_fetch_array($resulted);
        
                if($checked['EMAIL'] !== null){
                    die("The email you entered has already been used.<a href='SignIn.php'>Login</a><br/>");
        
                }
                if($createdPassword !== $passwordRepeat){
                    die("The passwords don't match");
                }
                    $sql = "INSERT INTO Credentials VALUES('','$fullName','$yourEmail','$role','$hashedPassword','$gender','" . implode(', ', $selectedLessons) . "','$dateOfBirth');";
                    mysqli_query($con,$sql);
                    echo "Acoount is successfully created <a href='SignIn.php'>Login</a>";


    }
    ?>
        </section>


        <?php
    include_once "../includes/Footer.php";

      
      ?> 


    <script src="js/signUp.js"></script>
    </body>
</html>