<?php 
require 'db.php';
?>
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
        $name=$_POST['name'];
        $type=$_POST['type'];
        $capacity=$_POST['capacity'];
        $query="INSERT into area (area,type,capacity) values('$name','$type','$capacity')";
        mysqli_query($connect,$query);
        echo'<script>alert("Success");</script>';
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
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="name" id="AreaName" value="" placeholder="AreaName" />
                    </div>
                    
                    
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="type" id="SoilType" value="" placeholder="SoilType" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="capacity" id="FieldCapacity" value="" placeholder="FieldCapacity" />
                    </div>
                    
                   
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" name="submit" value="Submit Form" class="primary" /></li>
                        </ul>
                    </div>
                </div>
            </form></div>
        </div>
    </div>
</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>