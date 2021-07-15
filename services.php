

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
                            <li class="has-dropdown active">
                                <a href="services.php">Services</a>
                            </li>
                            <li><a href="contact.php">CONTACT</a></li>
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
                                <h1>Our Services</h1>
                                <h2>Helthcare Free Services.</h2>
                                <h3>Continue to scrolldown.</h3>
                                <p>Announcement is posted here</p>

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>        
        <div class="gtco-section">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <h1>ANNOUNCEMENTS</h1>

                        <span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                        
                               <h3 class="card-title">Free Check-Up</h3>
                             <table class="a table table-sm">                                
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                </tr>                                
                             <tbody>     
                            
                                <?php 
        
                                $connection = mysqli_connect("localhost","root","","adminpanel");
                                $query = "SELECT * FROM checkup LIMIT 3 ";
                                $query_run = mysqli_query($connection, $query);
        
                                if (mysqli_num_rows($query_run) > 0) 
                                {
                                    foreach ($query_run as $row) 
                                    {
                                ?>
                                    <tr>   
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td><?php echo $row['location']; ?></td>

                                    </tr>
                                <?php
                                    }
                                }
                                ?>
                            </table>
                            </tbody>
                                
                                

                                </div> 
                            </div>
                        </div>
                        

                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">            
                                <h3>Free Medicine</h3>
                            <table class="a table table-sm">
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                </tr>
                                <tbody>
                                <tr>
                                <?php 
        
                                        $connection = mysqli_connect("localhost","root","","adminpanel");
                                        $query = "SELECT * FROM medicines LIMIT 3 ";
                                        $query_run = mysqli_query($connection, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                    <tr>   
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td><?php echo $row['location']; ?></td>

                                </tr>
                                    <?php
                                    }
                                }
                                

                                    ?>
                                </tr>
                                
                             </table>
                             </tbody>
                            </div>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="card">
                            <div class="card-body">
                                <div class="table-responsive">            
                                <h3>Free Vaccinne</h3>
                            <table class="a table table-sm">
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                </tr>
                                <tbody>
                                <tr>
                                <?php 
        
                                        $connection = mysqli_connect("localhost","root","","adminpanel");
                                        $query = "SELECT * FROM vaccine LIMIT 3 ";
                                        $query_run = mysqli_query($connection, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                    <tr>   
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td><?php echo $row['location']; ?></td>

                                </tr>
                                    <?php
                                    }
                                }
                                else 

                                {
                                }

                                    ?>
                                </tr>
                                
                             </table>
                             </tbody>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                    
                </div>
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">

             <div class="gtco-contact-info">

                        <h2>Instructions:</h2>
                        <p>Contact us to reserve your slot</p>
                        <p>Scroll-up and click "Contact"</p>
                        <p>Fill-up Reservation Form.</p>
                        
                        <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Protocols at Barangay Center</h2>
                        <p> Required to wear your Facemask and Faceshield.</p>
                        
                    </div>
                </div>
            </div>
        </div>      
        
        </div>    
      

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