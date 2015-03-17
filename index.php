<?php
session_start();
session_unset();
session_destroy();?>
<!DOCTYPE html>
<html>
	<head>
		<?php
        include 'head.php';		?>
		<script src="index.js" type="text/javascript"></script>
	</head>
	<body>
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="index.php">Don't Hate Your Roommate</a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>
			<section class="top-bar-section">
				<!-- Right Nav Section -->
				<ul class="right">
					<li class="active"><a href="home.php">Home</a></li>
					<li>
						<a href="#" data-reveal-id="registerTable">
							Register
						</a>
						<div id="registerTable" class="reveal-modal" data-reveal>
							<h2>Register</h2>
							<br/>
							<?php 	define("signup", true);
    include 'signup.php';							?>
							<a class="close-reveal-modal">&#215;</a>
						</div>
					</li>
					<li>
						<a href="#" data-reveal-id="loginTable">
							Log in
						 </a>
						<div id="loginTable" class="reveal-modal" data-reveal>
							<h2>Login</h2>
							<br/>
							<?php 	define("login", true);
    include 'login.php';							?>
							<a class="close-reveal-modal">&#215;</a>
						</div>
					</li>
				</ul>
				<!-- Left Nav Section -->
			</section>
		</nav>
		<div class="header">
			<div class="jumbotron">
				<div class="content">
					<img src="img/header3.jpg" border="0">
					<h2><span>Your first friend on campus is your roommate </span></h2>
				</div>
				<div class="content">
					<img src="img/header2.jpg" border="0">
					<h2><span>Don't let bad roommates ruin your college experience </span></h2>
				</div>								<div class="content">                    <img src="img/header1.jpg" border="0">					<h2><span>"You were right here all along..." - J.T.</span></h2>                </div>
			</div>
		</div>
		<div id="successMsg" data-alert class="alert-box success radius" style="display: none;">
			<a href="#" class="close">&times;</a>
		</div>
		<div class="about text-center">
			<br/>
			<h2>Ready to find your roommate?</h2><h4 class="subheader">Follow these Steps...</h2>			<div class="customRow">
				<div class="small-3 columns">
					<img src="img/register.png">
					<h3>1. Sign up</h3>
					<h6 class="subheader">Sign up and create a profile!</h6>
				</div>
				<div class="small-3 columns">
					<img src="img/survey.png">
					<h3>2. Fill out a survey</h3>
					<h6 class="subheader">Your answers will be used by our matching algorithm to pair you with potential roommates			</h4>
		</div>
		<div class="small-3 columns">
			<img src="img/tst5.png">
			<h3>3. View your matches</h3>
			<h6 class="subheader">Top 20 students compatible with your living-style</h4>		</div>
		<div class="small-3 columns">
			<img src="img/email.png">
			<h3>4. Send a request</h3>
			<h6 class="subheader">Send and receive email notifications.</h4>		</div>
		</div>
		<hr class="main-hr"/>
		<h2>About us</h2>
		<h4 class="subheader">Learn about the project and the developers who built it.</h4>		<p class="customRow">Computer Scientist and Software Engineer, Addsison Zhang, came up with the idea for students to select their future roommates from a list
			of potentially fitting colleagues. The hope and end-result was to match students to develop life-long friendships. 
			The website was started as a class project for databases/web programming, and the developers' intent is for this website to be used by 
			Rose-Hulman students to find their roommates in the future.</p>
		<br/>		<br/>		</div>		<div class="footer">
			<?php
            include 'footer.php';			?>
		</div><script type="text/javascript" src="slick-1.4.1/slick/slick.min.js"></script><!-- Keep this at bottom of body. -->		<script>			$(document).foundation();
		</script>	</body>
</html>