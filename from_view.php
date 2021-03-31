<?php
include "dvcon.php";
$id = $_GET['id'];
$a = "select * from user where id=$id";
$b = mysqli_query($con,$a);
$result = mysqli_fetch_array($b);
//print_r($result);


?>

<h1>name:<?php echo $result['name']?></h1>
<br>
<h1>college:<?php echo $result['collage']?></h1>
<br>
<h1>gender:<?php echo $result['gender']?></h1>
<br>
<h1>education:<?php echo $result['education']?></h1>
<br>

