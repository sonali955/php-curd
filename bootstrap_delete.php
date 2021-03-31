<?php 
include "dvcon.php";
 $id=$_GET['id'];
 $d="DELETE from emp where id=$id";
 $e=mysqli_query($con,$d);
 header('location:bootstrap_display.php');

?>