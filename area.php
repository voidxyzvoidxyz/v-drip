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
		<style> .mid {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  
  margin:auto;
}


/* Switch starts here */
.rocker {
  display: inline-block;
  position: relative;
  top:12px;
  margin-left:10px;
  /*
  SIZE OF SWITCH
  ==============
  All sizes are in em - therefore
  changing the font-size here
  will change the size of the switch.
  See .rocker-small below as example.
  */
  font-size: 1rem;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  color: #888;
  width: 14em;
  height: 4em;
  overflow: hidden;
  border-bottom: 0.5em solid #eee;
}

.rocker-small {
  font-size: 0.75em; /* Sizes the switch */
  margin: 1em;
}

.rocker::before {
  content: "";
  position: absolute;
  top: 0.5em;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #999;
  border: 0.5em solid #eee;
  border-bottom: 0;
}

.rocker input {
  opacity: 0;
  width: 0;
  height: 0;
}

.switch-left,
.switch-right {
  cursor: pointer;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.5em;
  width: 6em;
  transition: 0.2s;
}

.switch-left {
  height: 2.8em;
  width: 7em;
  left: 0.85em;
  bottom: 0.4em;
  background-color: #ddd;
  transform: rotate(15deg) skewX(15deg);
}

.switch-right {
  right: 0.5em;
  bottom: 0;
  background-color: #bd5757;
  color: #fff;
}

.switch-left::before,
.switch-right::before {
  content: "";
  position: absolute;
  width: 0.4em;
  height: 2.45em;
  bottom: -0.45em;
  background-color: #ccc;
  transform: skewY(-65deg);
}

.switch-left::before {
  left: -0.4em;
}

.switch-right::before {
  right: -0.375em;
  background-color: transparent;
  transform: skewY(65deg);
}

input:checked + .switch-left {
  background-color: #0084d0;
  color: #fff;
  bottom: 0px;
  left: 0.5em;
  height: 2.5em;
  width: 6em;
  transform: rotate(0deg) skewX(0deg);
}

input:checked + .switch-left::before {
  background-color: transparent;
  width: 3.0833em;
}

input:checked + .switch-left + .switch-right {
  background-color: #ddd;
  color: #888;
  bottom: 0.4em;
  right: 0.8em;
  height: 2.8em;
  width: 7em;
  transform: rotate(-15deg) skewX(-15deg);
}

input:checked + .switch-left + .switch-right::before {
  background-color: #ccc;
}

/* Keyboard Users */
input:focus + .switch-left {
  color: #333;
}

input:checked:focus + .switch-left {
  color: #fff;
}

input:focus + .switch-left + .switch-right {
  color: #fff;
}

input:checked:focus + .switch-left + .switch-right {
  color: #333;
}</style>
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
						<h2>Select Area</h2>
                                    
					</header>
					<div class="highlights">
					<?php
					$i=0;
					$query = "SELECT * FROM area";  
					$result = mysqli_query($connect, $query);  
					while($row = mysqli_fetch_array($result))  
					{ 
						$i++;
						echo'<a href="plants.php?a='.$row['aid'].'"><section>
							<div class="content">
							<header>
							<h2>'.$row['area'].'
							<div class="mid">
								<label class="rocker" for="cheq'.$i.'">
								<input class="cheq" id="cheq'.$i.'" value="'.$row['aid'].'" type="checkbox"';if($row['auto']=="yes"){ echo"checked"; } echo'>
								<span class="switch-left" onclick="hashi('.$i.')">Auto</span>
								<span class="switch-right" onclick="hashi('.$i.')">Manual</span>
								</label>
							</div>
							</h2>
							</header>
							<table class="table table-hover table-dark">
										<tbody>
										<tr>
											<th>Area Type</th>
											<td>Area Capacity</td>
										</tr>
										<tr>
											<th>'.$row['type'].'</th>
											<td>'.$row['capacity'].'</td>
										</tr>
										</tbody>
							</table>
							</div>
						</section></a>';
					} ?>
						
						<a href="addarea.php">
						<section>
							<div class="content">
								<header>
									<p class="icon fa-plus"><span class="label">Icon</span></p>
									<h2>Add Area</h2>
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
			<script>
				function hashi(x){
					var aid=$('#cheq'+x).val();
					if($('#cheq'+x).is(":checked")){
						if (window.XMLHttpRequest) {
							xmlhttp=new XMLHttpRequest();
						} else { // code for IE6, IE5
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function() {
							if (this.readyState==4 && this.status==200) {
							}
						}
						xmlhttp.open("GET","testopen.php?aid="+aid+"&auto=no",true);
						xmlhttp.send();
					}
					else{
						if (window.XMLHttpRequest) {
							xmlhttp=new XMLHttpRequest();
						} else { // code for IE6, IE5
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function() {
							if (this.readyState==4 && this.status==200) {
							}
						}
						xmlhttp.open("GET","testopen.php?aid="+aid+"&auto=yes",true);
						xmlhttp.send();
					}
				}
			</script>

	</body>
</html>