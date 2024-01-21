<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminServices</title>
        <link rel="stylesheet" href="Styles/adminServices.css">
    </head>
    <body>
        <?php
        include("../includes/adminHeader.php");
        ?>

        <section>
            <input id="addService" type="submit" name="add" value="Add new service">
            <table>
                <tr>
                    <th>ID</th>
                    <th>SERVICE_TITLE</th>
                    <th>SERVICE_DESCRIPTION</th>
                    <th>ACTIONS</th>
                </tr>
                <?php
      include("../Connection.php");
      $sql = "SELECT * FROM Services";
      $result = mysqli_query($con,$sql);
     while ($r = mysqli_fetch_array($result)){
      echo "<tr><td>".$r['ID']."</td><td>".$r['SERVICE_TIITLE']."</td><td>".$r['SERVICE_DESCRIPTION']."</td><td>
      <form action='' method='post' autocomplete='off'>
      <div id='edit' onclick='edit(".$r['ID'].")'>Edit</div>
      <input id='view' onclick='view(".$r['ID'].")' type='submit' value='View' name='View'>
      <input id='delete' onclick='remove(".$r['ID'].")' type='submit' value='Delete' name='Delete'>
      <input type='hidden' name='record_id' value=".$r['ID']."></td></tr>
      </form>";
     }

     if(isset($_POST["Delete"])){  
        $delId=$_POST['record_id'];  
        $del="DELETE FROM Services WHERE ID =". $delId;
        $deled= mysqli_query($con,$del);
        exit;
     }

     if(isset($_POST["View"])){
        $viewId= $_POST['record_id'];
        $view="SELECT * FROM Services WHERE ID = '$viewId'";
        $viewed=mysqli_query($con,$view);
        while($r=mysqli_fetch_array($viewed)){

              echo "    <form id='viewForm' action='' method=''>
            <div>ID: ".$r['ID']."</div>
            <div>SERVICE_TITLE: ".$r['SERVICE_TIITLE']."</div>
            <div>SERVIVICE_DESCRIPTION: ".$r['SERVICE_DESCRIPTION']."</div>
            <div id='hideView' name='hide'>X</div>
        </form>
    ";}


        }
?>
            </table>





        <form id="addForm" action="" method="post" autocomplete='off'>
            <h3>Add new service</h3>
            <input type="text" name="serviceTitle" placeholder="Enter the service">
            <textarea name="serviceDescription" id="addDescription" cols="30" rows="10" placeholder="Add service description"></textarea>
            <button id="addServiceButton" name="add">Add service</button>
            <div id="hideAdd">X</div>
        </form>

        <?php
    if(isset($_POST['add'])){
        $serviceTitle = $_POST["serviceTitle"];
        $serviceDescription = $_POST["serviceDescription"];
        $update="INSERT INTO Services VALUES('','$serviceTitle','$serviceDescription')";
        $result=mysqli_query($con,$update);
    }
    
    ?>

        <form id="updateForm" action="" method="post" autocomplete='off'>
            <h3>Update service</h3>
            <input type="hidden" id="record_id" name="edit_id">
            <input type="text" name="serviceTitle" placeholder="Enter the service">
            <textarea name="serviceDescription" id="addDescription" cols="30" rows="10" placeholder="Add service description"></textarea>
            <button id="editServiceButton" name="edit">Update service</button>
            <div id="hideEdit">X</div>
        </form>

        <?php
    if(isset($_POST['edit'])){
        $id=$_POST["edit_id"];
        $serviceTitle = $_POST["serviceTitle"];
        $serviceDescription = $_POST["serviceDescription"];
        $update="UPDATE Services SET SERVICE_TITLE = '$serviceTitle',SERVICE_DESCRIPTION = '$serviceDescription' WHERE ID = '$id'";
        $result=mysqli_query($con,$update);
    }
    
    ?>

    </section>
        <script src="js/adminService.js"></script>
    </body>
</html>