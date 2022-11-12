<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD OREDR WEBSITE-HOME PAGE</title>
    <link rel="stylesheet" href="../css/admin.css">
   
</head>
<body>
    <!-- menu section -->
    <div class="menu">

    <div class="wrapper">
            <ul>
            <li><a href="index.php">HOME</a></li>
                <li><a href="manageadmin.php">ADMIN</a></li>
                <li><a href="managecategory.php">caretaker data</a></li>
                <li><a href="managefood.php">FOOD</a></li>
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
         <!-- button to add admin  -->
        <a href="add-admin.php" class="btn-primary">add admin</a><br><br>
              <table class="tblfull">
                <tr>
                    <th>SN</th>
                    <th>Full name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                <tr>
                <td>1</td>
                    <td>kushal Neupane</td>
                    <td>kuxh</td>
                    <td>  <a href="add-admin.php" class="btn-secondary">Update</a>
                    <a href="add-admin.php" class="btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                <td>1</td>
                    <td>kushal Neupane</td>
                    <td>kuxh</td>
                    <td>  <a href="add-admin.php" class="btn-secondary">Update</a>
                    <a href="add-admin.php" class="btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                <td>1</td>
                    <td>kushal Neupane</td>
                    <td>kuxh</td>
                    <td>  <a href="add-admin.php" class="btn-secondary">Update</a>
                    <a href="add-admin.php" class="btn-danger">Delete</a>
                    </td>
                </tr>
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