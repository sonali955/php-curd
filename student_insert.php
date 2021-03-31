<?php

include "dvcon.php";

 $a =$_POST['name'];
 $b =$_POST['password'];
 $c =$_POST['gender'];
 $d =$_POST['city'];
 $e =$_POST['qualification'];
 $f=implode(',',$e);
   //print_r($e);

$data ="insert into test(name,password,gender,city,qualification) value ('$a','$b','$c','$d','$f')";
mysqli_query($con,$data);

?>