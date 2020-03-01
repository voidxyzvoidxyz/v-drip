<?php
    require 'db.php';
    $vid=$_GET['vid'];
    $status=$_GET['status'];
    $query="UPDATE valve set status='".$status."' where vid=".$vid."";
    mysqli_query($connect,$query);
?>