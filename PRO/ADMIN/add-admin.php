<?php
define('SITE_URL','http://localhost/ADMIN/add-admin.php') ;
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
    <title>Add Admin</title>
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
            </ul>
        </div>

    </div>
    <div class="main">
      <div class="wrapper">
            
         <h1>ADD Admin</h1>
      </div>
      </div>
      <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="fullname" placeholder="Enter your Full name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="enter your password"></td>
                </tr>
                <br></br>
                <tr>
                    
                    <td colspan="2">
                        <input type="submit" name="submit" value="ADD" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>
   

<?php 
if (isset($_POST['submit']))
{
    
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

}
$sql1 = "insert into Admin SET
        fullname = '$fullname',
        username= '$username',
        password = '$password'
";
$res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

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
