<?php 
include 'admin/dist/config.php';


?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>PERSONAL WEBSITE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo">PERSONAL INFORMATION</a>
									<ul class="icons">
										
										<li><a href="https://www.facebook.com/deev.patel.754/" class="icon brands fa-facebook-f" style="color:#3b5998"><span class="label">Facebook</span></a></li>
										
										<li><a href="https://www.instagram.com/deev_patel13/" class="icon brands fa-instagram" style="color:#E1306C"><span class="label">Instagram</span></a></li>
										
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Hello Guys !!</h1>																						<?php																						$resultwelcome = $conn -> query("SELECT * FROM myusers ORDER BY id DESC LIMIT 1");$rowwelcome = $resultwelcome -> fetch_row();											?>
											<p>My name is <?php echo $rowwelcome[2]; ?> and will be telling you about myself.</p>
										</header>

										<p>										 <?php echo $rowwelcome[3]; ?> 										</p>
									</div>
									<span class="image object">
										<img src="admin/dist/myimage/<?php echo $rowwelcome[1]; ?>" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>LANGUAGES I KNOW</h2>
									</header><div class="features"><?php


                    
									?>																																																								<article>											<!--<img src="admin/dist/myimage/<?php echo $row[1]; ?>" height="80" alt=""></span>-->											<div class="content">												<h1><?php echo $rowwelcome[4]; ?></h1>																							</div>										</article>
									
										
										
									
									
										
									
										
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>EDUCATION</h2>
									</header>
										<article>
										<div class="content">
										    <p><b><u>10th Grade Percentage</u></b></p>
										    	
										
										<p><i>Percentage: <?php echo $rowwelcome[5]; ?>%</i></p>
										
										
									</div>
									</article>
									<br><br>
									<article>
										<div class="content">
									
										<p><b>Diploma in IT</b> </p>
											
										<p><i>  Percentage: <?php echo $rowwelcome[6]; ?>% </i></p>
										
											
									
									</div>
									</article>
								</section>
								
						

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index2.php">Homepage</a></li>
										<li><a href="generic.php">Generic</a></li>
										
										
										
									</ul>
								</nav>

							<!-- Section -->
								

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>You can get in touch with me by any social media plaforms and also contact through the following.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="mailto:deevpatel6@gmail.com">DEEVPATEL16@GMAIL.COM</a></li>
										<li class="icon solid fa-phone"><a href="tel:+919004129606"> +91 9004129606</a></li>
										<li  class="icon solid fa-home"><a href="https://goo.gl/maps/NtiX9DbFjwPPH1fZ6" target="_blank"> F/11,PATEL SOCIETY,<br />VILE PARLE
											<br />MUMBAI,MAHARASHTRA,INDIA</a></li>
									</ul>
								</section>

							<!-- Footer -->
								

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
