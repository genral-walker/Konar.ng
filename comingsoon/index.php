<?php 
	$subscribe_status = '';
	if ( array_key_exists("email", $_POST)) {
	    $servername = 'localhost:3306';
    	$username = 'konarapp_admin';
    	$password = 'yZogAC!&jlLe';
    	$dbname = 'konarapp_emails';
        $conn;
    	
    	$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
    	if ($conn->connect_error) {
    	    die("Connection failed: " . $conn->connect_error);
    	}
    	
    	$if_already_exists = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `emails` WHERE `email` = '" . $_POST['email']."'"));
    	if($if_already_exists[0] > 0){
    	     $subscribe_status = '<div class="alert alert-danger" role="alert">Your email has already been subscribed</div>';
    	}else{
    	    $sql = "INSERT INTO `emails` (`sn`, `email`, `sent_from`, `created_on`) VALUES (NULL, '".$_POST['email']."', 'Construction Page', CURRENT_TIMESTAMP)";
        	if(mysqli_query($conn, $sql)){
        	    $subscribe_status = '<div class="alert alert-info" role="alert">Your email has been subscribed successfully!</div>';
        	}else{
        	    $subscribe_status = '<div class="alert alert-danger" role="alert">Your email has not been subscribed <br/>Please try again</div>';
        	}
    	}
	}
    	
	
	
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Konar - coming soon</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<link rel="icon" href="https://www.konarfoods.com/images/new_favicon.png">
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="common-css/jquery.classycountdown.css" />
		
	<link href="01-comming-soon/css/styles.css" rel="stylesheet">
	
	<link href="01-comming-soon/css/responsive.css" rel="stylesheet">
	<style>
	    .main-content .email-input-area .submit-btn {
            background: #c00017;
        }
         .main-content .email-input-area .submit-btn:hover {
            background: #d04152;
        }
	</style>
	
</head>
<body>
	
	<div class="main-area">
	    <div style="
            position: absolute;
            right: 30px;
            top: 30px;
            z-index: 1000;
        ">
	        <?php echo $subscribe_status; ?>
	    </div>
		<div class="container full-height position-static">
			
			<section class="left-section full-height">
		
				<a class="logo" href="#"><img src="images/logo.png" alt="Logo"></a>
				
				<div class="display-table">
					<div class="display-table-cell">
						<div class="main-content">
							<h1 class="title"><b>Under Construction</b></h1>
							<p>Konar.ng is currently undergoing construction.
								But be rest assured we're cooking up something awesome.</p>

							<div class="email-input-area">
								<form method="post">
									<input class="email-input" name="email" type="text" placeholder="Enter your email"/>
									<button class="submit-btn" name="submit" type="submit"><b>NOTIFY ME</b></button>
								</form>
							</div><!-- email-input-area -->
							
							<p class="post-desc">Subscribe now to get early notification of our lauch date!</p>
						</div><!-- main-content -->
					</div><!-- display-table-cell -->
				</div><!-- display-table -->
				
				<ul class="footer-icons">
					<li>Stay in touch : </li>
					<li><a href="https://www.facebook.com/Konarlogistics-company-105971740778720/" target="_blank"><i class="ion-social-facebook"></i></a></li>
					<li><a href="https://twitter.com/konarNg" target="_blank"><i class="ion-social-twitter"></i></a></li>
					<!--<li><a href="#"><i class="ion-social-googleplus"></i></a></li>-->
					<li><a href="https://www.instagram.com/konar.ng/" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>
					<!--<li><a href="#"><i class="ion-social-pinterest"></i></a></li>-->
				</ul>
		
			</section><!-- left-section -->
		
			<section class="right-section" style="background-image: url(https://s3-eu-central-1.amazonaws.com/eurosender-blog/wp-content/uploads/2017/03/23104638/deliveries-2-1024x683.jpg);background-position-x: right;">
			
				<div class="display-table center-text">
					<div class="display-table-cell">
						
						
						<!--<div id="rounded-countdown">-->
						<!--	<div class="countdown" data-remaining-sec="2000000"></div>-->
						<!--</div>-->
						
					</div><!-- display-table-cell -->
				</div><!-- display-table -->
				
			</section><!-- right-section -->
		
		</div><!-- container -->
	</div><!-- main-area -->
	
	<!-- SCIPTS -->
	
	<script src="common-js/jquery-3.1.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/jquery.classycountdown.js"></script>
	
	<script src="common-js/jquery.knob.js"></script>
	
	<script src="common-js/jquery.throttle.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
</body>
</html>