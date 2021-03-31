<?php 
include "dvcon.php";

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['dob'];
 $d=$_POST['password'];
 $e=$_POST['college'];

  

 $data="insert into emp(name,email,dob,password,college)value('$a','$b','$c','$d','$e')";
mysqli_query($con,$data);

?>