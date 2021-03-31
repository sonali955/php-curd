<?php
include "dvcon.php";
$id =$_POST['id'];
$a =$_POST['name'];
$b =$_POST['email'];
$c =$_POST['dob'];
$d =$_POST['education'];
$e =$_POST['address'];
$f =$_POST['qualification'];
$g =$_POST['gender'];
//echo $a,$b,$c,$d,$e,$f,$g;
$h="UPDATE nit SET name='$a',email='$b',dob='$c',education='$d',address='$e',qualification='$f',gender='$g' WHERE id=$id";
mysqli_query($con,$h);

?>