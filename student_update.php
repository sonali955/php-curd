<?php
include "dvcon.php";
$id = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['password'];
$c = $_POST['gender'];
$d = $_POST['city'];
$e = $_POST['qualification'];

//echo $a,$b,$c,$d,$e;
$d ="UPDATE test Set name='$a',password='$b',gender='$c',city='$d',qualification='$e' WHERE id=$id";
mysqli_query($con,$d);
?>