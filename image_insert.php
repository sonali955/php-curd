<?php
include "dvcon.php";
//print_r($_FILES['image']);

 $a=$_POST['name'];
 $filename=$_FILES['image']['name'];
 $tempname=$_FILES['image']['tmp_name'];

$file="upload/" .$filename;
//print_r($file);
move_uploaded_file($tempname, $file);
$data="insert into image(name,image) value ('$a','$file')";
$result=mysqli_query($con,$data);
if($result){
	echo "<script> alert('data inserted')"
}
?>