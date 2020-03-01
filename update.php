<?php
require 'db.php';
$aid=$_GET['aid'];
$vid=$_GET['vid'];
$value=$_GET['m'];
$query = "UPDATE valve set cm='".$value."' where vid=".$vid."";  
mysqli_query($connect, $query); 
$query = "SELECT * FROM area where aid=$aid";  
$row = mysqli_fetch_array(mysqli_query($connect, $query)); 
if($row['auto']=="yes"){
	$query = "SELECT * FROM valve where vid=$vid";  
	$row = mysqli_fetch_array(mysqli_query($connect, $query));  
	{
        if($value>=$row['m']){
            echo "on";
        }
        else{
            echo "off";
        }
    } 
}
else{
    $query = "SELECT * FROM valve where vid=$vid"; 
	$row = mysqli_fetch_array(mysqli_query($connect, $query));  
	{
            echo $row['status'];
    }
}
?>

