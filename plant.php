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
  display: flex;
  align-items: center;
  justify-content: center;
  
  margin:auto;
}


/* Switch starts here */
.rocker {
  display: inline-block;
  position: relative;
  top:-14px;
  /*
  SIZE OF SWITCH
  ==============
  All sizes are in em - therefore
  changing the font-size here
  will change the size of the switch.
  See .rocker-small below as example.
  */
  font-size: 1.5em;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  color: #888;
  width: 7em;
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
  width: 3em;
  transition: 0.2s;
}

.switch-left {
  height: 2.4em;
  width: 2.75em;
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
  width: 3em;
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
  height: 2.4em;
  width: 2.75em;
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
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-leaf"><span class="label">Icon</span></a>
									<h2>Coconut Tree</h2>
                                </header>
                            </div>
                        </section>
                        <section> 
                        <div class="content planttable">
							<?php
									$query = "SELECT * FROM valve where vid = ".$_GET['v']."";  
									$result = mysqli_query($connect, $query);  
									$row = mysqli_fetch_array($result);
									
									echo'<div class="row">
										<div class="col-3 col-12-small">
											<ul class="actions stacked">
                                            </ul>
                                        </div>
                                        <div class="mid">';
										
									
									echo'
                                            <label class="rocker" for="cheq1">
                                            <input type="checkbox" id="cheq1" class="cheq" value="'.$_GET['v'].'"'; if($row['status']=="on"){ echo "checked"; } echo'>
                                            <span class="switch-left" onclick="hashi(this.value)">On</span>
                                            <span class="switch-right" onclick="hashi(this.value)">Off</span>
                                            </label>

                                        </div>
                                    </div>
									<div id="data">';
									$row = mysqli_fetch_array($result);
									{ 
									echo'<table class="table table-hover table-dark">
										<thead>
										<tr>
											<th scope="col">Properties</th>
											<th scope="col">Field Capacity</th>
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
								  </table>';
								} ?>
								</div>
							</div>
                        </section>
					</div>

				</div>

			</section>

		<!-- CTA -->

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
			<script type="text/javascript">
				function doRefresh(){
					var v = "<?php echo $_GET['v']; ?>";
					$("#data").load("data.php?v="+v);
				}
				$(function() {
					setInterval(doRefresh, 2000);
				});
			</script>
			<script>
				function hashi(x){
					var vid=$('.cheq').val();
					if($(".cheq").is(":checked")){
						if (window.XMLHttpRequest) {
							xmlhttp=new XMLHttpRequest();
						} else { // code for IE6, IE5
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function() {
							if (this.readyState==4 && this.status==200) {
							}
						}
						xmlhttp.open("GET","testopen1.php?vid="+vid+"&status=off",true);
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
						xmlhttp.open("GET","testopen1.php?vid="+vid+"&status=on",true);
						xmlhttp.send();
					}
				}
			</script>

	</body>
</html>