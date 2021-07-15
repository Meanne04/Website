
  <?php
        
        session_start();
         include('contactcode.php');
        ?>

<!DOCTYPE HTML>
<!--
	Greatness by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://FreeHTML5.co
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />



    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <div class="gtco-loader"></div>

    <div id="page">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="gtco-logo">
                            <a href="index.html"></a>
                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="has-dropdown">
                                <a href="services.php">Services</a>

                            </li>

                            <li class="active"><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>RESERVATION OF SLOTS</h1>
                                <h2>Continue to scrolldown</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <h3>Fill-up the Form</h3>
                        <p>Resident's Details</p>
                        <form action="" method="POST">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="name">Firstname</label>
                                    <input type="text" name="firstname" required class="form-control" placeholder="Your Fullname">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" name="lastname" required class="form-control" placeholder="Your Lastname">
                                </div>
                            </div>
                                        <div class="row form-group">
                                        <label>Gender</label>
                                        <select required class="form-control" name="gender">
                                        <option>Female</option>
                                        <option>Male</option>
                                        </select>
                                    </div>
                                <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="Home Address">Home Address</label>
                                    <input type="text" name="address" required class="form-control" placeholder="Your Complete Address">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="PhoneNo">Phone Number</label>
                                    <input type="text" name="phoneNo" required class="form-control" placeholder="+1 999 999 9999">
                                </div>
                            </div>
                            

                            <div class="row form-group">
                                <div class="col-md-12">

                                    <label for="services">Services</label>
                                    <select name="services"  required class="form-control">
                                        <option>Free Check-up</option>
                                        <option>Free Medicines</option>
                                        <option>Free Vaccine</option>

                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="Date">Date Schedule</label>
                                    <input type="date" name="dateofsched" required class="form-control" placeholder="">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="Time">Time Schedule</label>
                                    <input type="text" name="timeofsched" required class="form-control" placeholder="Time"></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" id="click" value="Submit" class="btn btn-primary">
                                </div>
                              
                        </form>
                     
                     </div>
                             
                    <div class="col-md-5 col-md-push-1 animate-box">

                        <div class="gtco-contact-info">
                            <h3>Available slots</h3>

                            <table class="a table">
                                <tr>
                                    <th>Services</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Slots</th>
                                </tr>
                                <tbody>

                                <?php 
        
                                $connection = mysqli_connect("localhost","root","","adminpanel");
                                $query = "SELECT * FROM slots";
                                $query_run = mysqli_query($connection, $query);
        
                                if (mysqli_num_rows($query_run) > 0) 
                                {
                                    foreach ($query_run as $row) 
                                    {
                                ?>
                                    <tr>   
                                    <td><?php echo $row['services']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td><?php echo $row['slots']; ?></td>

                                    </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                            </table>   
                            <div class="form-group">
                            <p>check your name to the lists <a href="lists.php">click here</a></p>
                                        </div>
                            <div class="col-md-6">
                                <h1>STAY UPDATED WITH US</h1>
                                <P>THANK YOU!</P>
                            </div>
                        </div>
                        <div class="etc-login-form">
                       
                        

                    </div>
                </div>

            </div>
        </div>

            <div class="gtco-container">
                <div class="row row-pb-md">
                    
        </div>
 </div>

                    
                </div>

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://FreeHTML5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                        </p>
                        <p class="pull-right">
                            <ul class="gtco-social-icons pull-right">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>