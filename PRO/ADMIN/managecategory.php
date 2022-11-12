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
    <title>Manage catgory</title>
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
    <div class="maincontent">
        <div class="wrapper">
            <H1>Manage category</h1>

               
<!-- main section -->
<div class="main">
    <div class="wrapper">
        <h2><u> Datas</u></h2><br>
        
        
       
        
        <table class="tblfull">
        <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Phonenumber</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            <?php
              $sql = "select * from ohno";
              $res = mysqli_query($conn, $sql);
              if ($res == TRUE) {
                  $count = mysqli_num_rows($res);
                   
            
            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $Id = $rows['Id'];  
                  $Name = $rows['Name'];
                  $number = $rows['number'];
                  $email= $rows['email'];
                  $address = $rows['address'];
            ?>
                    <tr>
                        <td><?php echo $Id;?></td>
                        <td><?php echo $Name;?></td>
                        <td><?php echo $number;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $address;?></td>
                        <td>
                        <a href="<?php echo SITE_URL;?>Admin/.php?id=<?php echo $id; ?>" class="btn-primary">Update</a>
                            <a href="<?php echo SITE_URL;?>Admin/deletecategory.php?id=<?php echo $id; ?>" class="btn-primary">Delete</a>
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