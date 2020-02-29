<!DOCTYPE HTML>

<html>
	<head>
		<title>V-Drip</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<?php 
		if(isset($_POST['submit'])){
			$name="vdrip";
			$pass="password";
			if($_POST['name']==$name && $_POST['password']==$pass)
				header('location:area.php');
		}
	?>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">V-Drip</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav>
            <section id="main" clas="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="row">
            <form method="post" action="">
                <div class="row gtr-uniform">
                    <div class="col-12 col-12-xsmall">
                        <input type="text" name="name" id="Username" value="" placeholder="Username" />
                    </div>
                    <div class="col-12 col-12-xsmall">
                        <input type="password" name="password" id="Password" value="" placeholder="Password" />
                    </div>
                    
                    <!-- Break -->
                    <div class="col-12">
                        <ul class="actions">
							<li><input type="submit" name="submit" value="Login" class="primary" /></li>	
                        </ul>
					</div>
					
                </div>
            </form></div>
        </div>
    </div>
</section>

	
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>