<?php
include "dvcon.php";

echo $id = $_GET['id'];
 $data ="delete from test where id=$id";
 mysqli_query($con,$data);
 header('location:student_display.php');
?>