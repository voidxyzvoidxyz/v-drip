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
					<li><a href="area.php">Home</a></li>
				</ul>
			</nav>

		<!-- Banner -->

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Select Plant</h2>
						</header>
					<div class="highlights">
					<?php
					$query = "SELECT * FROM valve where aid = ".$_GET['a']."";  
					$result = mysqli_query($connect, $query);  
					while($row = mysqli_fetch_array($result))  
					{ 	
						echo'<a href="plant.php?v='.$row['vid'].'"><section>
							<div class="content">
								<header>
									<p  class="icon fa-leaf"><span class="label">Icon</span></p>
									<h2>'.$row['name'].'</h2>
								</header>
								<table class="table table-hover table-dark">
										<thead>
										<tr>
											<th scope="col">Properties</th>
											<th scope="col">Range</th>
											<th scope="col">Current Value</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<th>Moisture</th>
											<td>'.$row['m'].'</td>
											<td>'.$row['cm'].'</td>
										</tr>
										</tbody>
								  </table>
							</div>
						</section></a>';
					} ?>
						
						<a href="addplants.php?a=<?php echo $_GET['a']; ?>">
						<section>
							<div class="content">
								<header>
									<p class="icon fa-plus"><span class="label">Icon</span></p>
									<h2>Add Plants</h2>
								</header>
								
							</div>
						</section>
</a>
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