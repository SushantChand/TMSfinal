<?php
define('SITE_URL','http://localhost/PRO') ;
define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','caretaker');
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
 $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage admin</title>
    <link rel="stylesheet" href="../css/admin.css">
   
</head>
<body>
    <!-- menu section -->
    <div class="menu">

    <div class="wrapper">
            <ul>
            <li><a href="index.php">HOME</a></li>
                <li><a href="manageadmin.php">ADMIN</a></li>
                <li><a href="managecategory.php">CARETAKER DATA</a></li>
                <li><a href="query.php">Query</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
            </ul>
        </div>

    </div>
<div class="main">
    <div class="wrapper">
        <h1>UPDATE ADMIN</h1><br>
        
       
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="fullname" value="<?php echo $fullname;?>"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $username;?>"></td>
                </tr>
               
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="Id" value="<?php echo $Id?>">
                        <input type="submit" name="submit" value="update" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
// check whether the submit button is clicked or not 
if(isset($_POST['submit'])){
    // get all value from form 
    $Id= $_POST['Id'];
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];

    // create sql query to update admin
    $sql = "update Admin set fullname='$fullname', 
    username='$username' 
    Where Id=$Id";
    //  execute the query
    $res = mysqli_query($conn, $sql);

    // check whether the query executed successfully or nor 
    if($res==TRUE){
        $_SESSION['update'] = "<div class='success'>admin updated successfully</div>";
        header('location:'.SITE_URL.'Admin/manageadmin.php');
    }else{
        $_SESSION['update'] = "<div class='error'>failed to update</div>";
        header('location:'.SITE_URL.'Admin/manageadmin.php');
    }
}
?>

<!-- footer section -->
<div class="footer">
<div class="wrapper">
          <p>developed by team zero

          </p>
        </div>


    </div>
</body>
</html>