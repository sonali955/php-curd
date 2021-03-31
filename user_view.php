<?php
include "dvcon.php";
echo $id =$_GET['id'];
$a ="select * from nit where id=$id";
$b =mysqli_query($con,$a);
$result =mysqli_fetch_array($b);
//print_r($result);

?>

<h1><?php echo $result['name']?></h1>
<br>
<h1><?php echo $result['email']?></h1>
<br>
<h1><?php echo $result['dob']?></h1>
<br>
<h1><?php echo $result['education']?></h1>
<br>
<h1><?php echo $result['address']?></h1>
<br>
<h1><?php echo $result['qualification']?></h1>
<br>
<h1><?php echo $result['gender']?></h1>
<br>