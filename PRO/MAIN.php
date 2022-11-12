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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Medical Solution</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">T<span>MS</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#Services" class="menu-btn">Services</a></li>
                <li><a href="#Doctors" class="menu-btn">Doctors</a></li>
                <li><a href="#Caretaker" class="menu-btn">Caretaker</a></li>
                <li><a href="#Review" class="menu-btn">Review</a></li>
                <li><a href="#Contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
            
                <div class="text-2">Total Medical Solution</div>
                <div class="text-3">We Provide <span class="typing"></span></div>
              
            </div>
        </div>
    </section>
    
    <!-- services section start -->
    <section class="services" id="Services">
        <div class="max-width">
            <h2 class="title">Our Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-user-md"></i>
                        <div class="text">Doctors Appointment</div>
                        <p> We have renowned Doctors </p>
                    </div>
               </div>
                 <a href="caretaker.php"target="_blank"> <div class="card">
                    <div class="box">
                        <i class="fas fa-user-nurse"></i>
                        <div class="text">Caretaker</div>
                        <p>Caretaker 24 hrs</p>
                    </div> </a> 
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-ambulance"></i>
                        <div class="text">Ambulance Near Me</div>
                        <p>Find- Ambulance near you</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
    <!-- Doctors section start -->
    <section class="teams" id="Doctors">
        <div class="max-width">
            <h2 class="title">Doctors </h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Caretaker section start -->
    <section class="teams" id="Caretaker">
        <div class="max-width">
            <h2 class="title">Caretaker</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
       <!-- Review Section-->
    <section class="teams" id="Review">
        <div class="max-width">
            <h2 class="title">Reviews</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Shirshak Shahi</div>
                        <p>It was a pleasant experience ,
                            timely service.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- contact section start -->
    <section class="contact" id="Contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p> We are always happy to take suggestions</p>
                    <div class="icons">
                        <div class="row">
                            <i class="	fas fa-users"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Total Medical Solution</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marked-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Kathmandu, Nepal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope-open"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">TMS@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Phone No</div>
                                <div class="sub-title">01-5186354</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="Name" placeholder="Name" class="input-responsive" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="Email" placeholder="E.g. Shirsu9@gmail.com" class="input-responsive" required>
                            </div>
                        </div>
                        
                        <div class="field">
                            <input type="tel" name="contact" placeholder="E.g. 9823xxxxxx" class="input-responsive" required>
                        </div>
                        <div class="field">
                            <input type="text" name="Subject" placeholder="Subject" class="input-responsive" required>
                        </div>
                        <div class="field ">
                          <input type="text" name="Message" placeholder="Message" class="input-responsive" required>
                        <div class="button-area">
                            <button type="submit" name="submit" class="btn btn-primary" >submit</button>
                        </div>
                    </form>
                    <?php
 if(isset($_POST['submit'])){
    
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $contact = $_POST['contact'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message '];
    

    $sql1 = "insert into query set
                  Name = '$Name',
                  Email = '$Email',
                  contact = '$contact',
                  Subject  = '$Subject' ,
                  Message = '$Message'
                 
            ";

    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
  
}
?>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://ncit.edu.np/"target="_blank">Team Zero</a>  <span class="far fa-copyright"></span> All rights reserved of 2022.</span>
    </footer>
    <script src="script.js"></script>
</body>
</html>