<?php
include "dvcon.php";
 $a=$_POST['name'];
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];

$file="upload/" .$filename;
//print_r($file);
move_uploaded_file($tempname, $file);




?>