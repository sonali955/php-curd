<?php
include "dvcon.php";

$a =$_POST['name'];
$b =$_POST['email'];
$c =$_POST['dob'];
$d =$_POST['education'];
$e =$_POST['address'];
$f =$_POST['qualification'];
$g =$_POST['gender'];
$h=implode(',',$f);
//print_r($f);

//echo $a,$b,$c,$d,$e,$f,$g;
 $data="insert into nit(name,email,dob,education,address,qualification,gender) value ('$a','$b','$c','$d','$e','$h','$g')";
 mysqli_query($con,$data);


?>
