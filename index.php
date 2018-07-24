<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Weediyabandara Maha Vidyalaya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="../index.php" id="logo" title="HarrisonHighSchool">Weediyabandara Maha Vidyalaya</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="pages/about.html">About VBMV</a></li>
					<li><a href="pages/staff.html">Staff</a></li>
					<li><a href="pages/news.php">News</a></li>
 				</ul>
				<ul>
					<li><a href="pages/academic.html">Academics</a></li>
					<li><a href="pages/gallery.html">Gallery</a></li>
					<!-- This has to be changed (Contact)
					<li><a href="#fancy" class="get-contact">Contact</a></li>
					-->
					

   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	
	<?php include("widgets/slider.php"); ?>
	<?php include("widgets/posts.php"); ?>
	<?php include("widgets/news.php"); ?>
	<?php include("widgets/mission.php"); ?>

	<!--Footer -->
	<?php include("widgets/footer.php"); ?>
	<!--/Footer -->
	 
	
	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>
	

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
