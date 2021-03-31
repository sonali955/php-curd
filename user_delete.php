<?php
include "dvcon.php";
$id =$_POST['id'];
$data ="DELETE FROM nit WHERE id=$id";
mysqli_query($con,$data);
header('location:user_display.php');



?>