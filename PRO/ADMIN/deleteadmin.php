<?php
<?php
session_start();
define('SITE_URL','http://localhost/PRO') ;
define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','caretaker');
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
 $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));
 ?>

// get the ID of admin to be deleted 
$Id = $_GET['Id']; 
// create sql query to delete 
$sql = "Delete from Admin where Id=$Id";

// excute the query 
$res = mysqli_query($conn, $sql);

// check whether the query excuted successfully or not 
if($res==TRUE){
    // create session variable to display msg 
    $_SESSION['delete'] = "Admin deleted sucessfully";
    header('location:'.SITE_URL.'Admin/manageadmin.php');
}else{
    $_SESSION['delete'] = "<div class='error'>Failed to delete</div>";
    header('location:'.SITE_URL.'Admin/manageadmin.php');
}
// redirect to manage admin page with msg 
?>