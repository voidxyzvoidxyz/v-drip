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
        $t=$_POST['t'];
        $h=$_POST['h'];
        $m=$_POST['m'];
        $aid=$_GET['a'];
        $query="INSERT into valve (aid,name,t,h,m) values($aid,'$name','$t','$h','$m')";
        mysqli_query($connect,$query);
        $id=mysqli_insert_id($connect);
        echo'<script>alert("Success");</script>';
        header('location:program.php?a='.$_GET['a'].'&v='.$id.'');
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
                        <input type="text" name="name" id="PlantName" value="" placeholder="PlantName" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="h" id="OptimalHumidity" value="" placeholder="OptimalHumidity" />
                    </div>
                    
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="t" id="OptimalTemperature" value="" placeholder="OptimalTemperature" />
                    </div>
                    
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="m" id="WaterRequired" value="" placeholder="Optimal Moisture" />
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