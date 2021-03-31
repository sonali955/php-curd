<?php
include "dvcon.php";
$a=$_post['username'];
$b=$_post['email'];
$c=$_post['password'];
$d=$_post['roll'];

$data="insert into sign(username,email,password,roll) value ('$a',$b','$c','$d')";
$result=mysqli_query($con,$data);
if($result){
	echo "<script> alert('data inserted')</script>";

}
else{
	echo "<script> alert(/data not inserted')</script>";
}

?>