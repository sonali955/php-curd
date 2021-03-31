<?php 
include "dvcon.php";
$id=$_POST['id'];

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['dob'];
 $d=$_POST['password'];
 $e=$_POST['college'];

 echo $res="UPDATE emp SET name='$a',email='$b',dob='$c',password='$d',college='$e' where id=$id";
 mysqli_query($con,$res);
 header('location:bootstrap_display.php');
?>
