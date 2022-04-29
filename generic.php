<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php 
include 'admin/dist/config.php';


?>
<html>
	<head>
		<title>Sample Website</title>
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
									<a href="index2.php" class="logo">General Information</a>
									<ul class="icons">
										
										<li><a href="https://www.facebook.com/deev.patel.754/" class="icon brands fa-facebook-f" style="color:#3b5998"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/deev_patel13/" class="icon brands fa-instagram" style="color:#E1306C"><span class="label">Instagram</span></a></li>
										
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Generic</h1>
									</header>

									
									<hr class="major" />
									<br><br><br>
									<h2>IDEATION</h2>
						<?php
											
											$resultwelcome = $conn -> query("SELECT * FROM myusers ORDER BY id DESC LIMIT 1");
$rowwelcome = $resultwelcome -> fetch_row();
											?>

									<p>
									    <?php echo $rowwelcome[3]; ?> 
									    </p>
									    
									  
									
									

									<hr class="major" />

									<h2>SKILLS</h2>
										
									<p>
									    <?php echo $rowwelcome[7]; ?>
									    </p>
									    
									 
									

									<hr class="major" />

									<h2>HOBBIES</h2>
									
									<p>
									    <?php echo $rowwelcome[8]; ?>
									    </p>
									    
									  
									

									<hr class="major" />

									<h2>SOCIAL MEDIA ACCOUNTS</h2>
									<p>Instagram: deev_patel13<br>Snapchat: deevpatel10<br>Whatsapp: +91 9004129606 (You can WhatsApp me on this number) <br>LinkedIn: Deev Patel</p>

									

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index2.php">Homepage</a></li>
										<li><a href="generic.php">Generic</a></li>
										<br><br><br><br>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>You can get in touch with me by any social media plaforms and also contact through the following.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="mailto:deevpatel6@gmail.com"> deevpatel16@gmail.com</a></li>
										<li class="icon solid fa-phone"><a href="tel:+919004129606"> +91 9004129606</a></li>
										<li  class="icon solid fa-home"><a href="https://goo.gl/maps/NtiX9DbFjwPPH1fZ6" target="_blank"> F/11,Patel Society,Vile Parle-East,
											Mumbai,Maharashtra.India</a></li>
									</ul>
								</section>

							
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
