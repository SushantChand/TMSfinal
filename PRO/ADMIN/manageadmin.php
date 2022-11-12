<?php 
define('SITE_URL','http://localhost/PRO/') ;
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

    <!-- main section -->
    <div class="main">
      <div class="wrapper">
            
         <h1>Manage Admin</h1>
         <br></br>
         <?php
       
        if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['update'])){
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        
       
        ?><br><br>
         <!-- button to add admin  -->
        <a href="add-admin.php" class="btn-primary">ADD ADMIN</a><br><br>
              <table class="tblfull">
                <tr>
                    <th>SN</th>
                    <th>Full name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                
                <?php
            $sql = "select * from Admin";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                 
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $Id = $rows['Id'];
                        $fullname = $rows['fullname'];
                        $username = $rows['username'];
                        ?>
                        <tr>
                            <td><?php echo $Id; ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
   
                                <a href="<?php echo SITE_URL;?>Admin/updateadmin.php?Id=<?php echo $Id;?>"  class="btn-primary">Update</a>
                                <a href="<?php echo SITE_URL;?>Admin/deleteadmin.php?Id=<?php echo $Id;?>"  class="btn-primary">Delete</a>
                            </td>
                        </tr>
                       
                        <?php
                    }
                }
            }
            ?>
                
             </table> 
            
            

             
            </div> 
       </div>
<!-- footer section -->
<div class="footer">
<div class="wrapper">
          <p>developed by team zero

          </p>
        </div>


    </div>
</body>
</html>