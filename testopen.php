<?php
    require 'db.php';
    $aid=$_GET['aid'];
    $auto=$_GET['auto'];
    $query="UPDATE area set auto='".$auto."' where aid=".$aid."";
    mysqli_query($connect,$query);
?>