<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel Moon Valley - &amp;</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="frameworks/complain.css">

</head>

<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>


    <header class="header-area">
    
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="palatinNav">
                        <a href="index.html" class="nav-brand"><span>Hotel </span>Moon Valley</a>
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li ><a href="homepage.php">Home</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li class="active"><a href="user_complain.php">Complain</a></li>
                                    <li><a href="login.php">login</a></li>
                                </ul>
                                <div class="menu-btn">
                                    <a href="booking.php" class="btn palatin-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(images_1/2.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </section>


  

    <section id="contact">
        <div class="contact-box">
          <div class="contact-links">
            <h2>Have Any Complaints? Let us know.</h2>
            
          </div>
          <div class="contact-form-wrapper">

            <?php
                require('db.php');
                session_start();

                if (isset($_POST['submit'])) {

                    $complainant_name = $_POST['complainant_name'];
                    $complaint_type = $_POST['complaint_type'];
                    $complaint = $_POST['complaint'];

                    $query = "INSERT INTO complaint (complainant_name,complaint_type,complaint) VALUES ('$complainant_name','$complaint_type','$complaint')";

                $sql = mysqli_query($connection,$query) or die("Query Unsuccessful.");

                    if ($sql) {
                                    echo '<script> alert("Data Saved"); </script>';
                             
                                }
                             else {
                                echo '<script> alert("Data Not Saved"); </script>';
                            }
                          }
                        
             ?>

            <form method="post" action="">
              <div class="form-item">
                <input type="text" name="complainant_name" required>
                <label>Name:</label>
              </div>
              <div class="form-item">
                <input type="text" name="complaint_type" required>
                <label>Complaint Type</label>
              </div>
              <div class="form-item">
                <textarea class="" name="complaint" required></textarea>
                <label>Describe your problem</label>
              </div>
              <<input type="submit" class="submit-btn" name="submit" value="submit">  
            </form>
          </div>
        </div>
</section>



        <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="index.html" class="nav-brand d-block mb-5"><span>Hotel </span>Moon Valley</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-3" style="margin-left: 30%;">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Your E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Homepage is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Sumaia Syeda</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>