
<?php
require 'db.php';
$query = "SELECT * FROM valve where vid = ".$_GET['v']."";  
									$result = mysqli_query($connect, $query);  
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