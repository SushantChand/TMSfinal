<?php

define('SITE_URL','http://localhost/PRO/MAIN.php') ;
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
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caretaker</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="caretaker.css">
</head>

<body>
  
   

    
    
        <div class="container"><br></br>
            
            <h2 class="text-center text-white">Fill Up the Form</h2>

            <form action=""  class="order" method="post">
                <fieldset>
                   

                    <div class="img">
                        <img src="Nurse.webp" alt="photo" class="img-responsive img-curve">
                    </div>
    
                    <div class="desc">
                        <h3>Charge</h3>
                        <p class="price">Rs1200 perday</p>
                        <br></br>
                        <br></br>

                        <div class="order-label">Number of people required</div><br>
                        <div class="order-label">
                           <input type="number" name="Quantity" class="input-responsive" value="1" required> 
                           <td>
                            <br>
                            <br>
                        <input type="radio" name="gender" value="m">male
                         <input type="radio" name="gender" value="f">female
                    </td> 
                        </div>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Your Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="Name" placeholder="E.g. Shirshak Shahi" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="number" placeholder="E.g. 9823xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. Shirsu9@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <input type="text" name="address" placeholder="address" class="input-responsive" required>


                    <input type="Submit" name="Submit"  class="btn btn-primary"> </inputs>
                </fieldset>

            </form>
 <?php 
      if(isset($_POST['Submit'])){
     $Quantity = $_POST['Quantity'];
     if(isset($_POST['gender'])){
         $gender=$_POST['gender'];
     }else{
         $gender= "f";
    }
    $Name = $_POST['Name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
   
   
    

    $sql1 = "insert into ohno set 
    Quantity= '$Quantity',
    gender= '$gender',
    Name = '$Name ',
     
    number= '$number',
    email= '$email',              
    address = '$address'
                 
            ";

    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    header("Location:pop.html?success");
 
     }

  ?>

        </div>
   
     <!-- footer section start -->
     <footer>
        <span >Created By <a href="https://ncit.edu.np/"target="_blank">Team Zero</a>  <span class="far fa-copyright"></span> All rights reserved of 2022.</span>
    </footer>
  

</body>
</html>