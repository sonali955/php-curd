<?php
include "dvcon.php";

 $a=$_POST['email'];
 $b=$_POST['password'];

$query="select * from signup where email='$a' && password='$b'";
$data=myqli_query($con,$query);
$total=mysqli_num_rows($data);
//echo $total;
if($total==1){
	header('location:admin.php');
}
else{
	header('location:sign_in.php');
}
?>