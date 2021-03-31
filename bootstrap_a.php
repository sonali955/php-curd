<?php 
include "dvcon.php";
$id=$_GET['id'];
$a="select *from emp where id=$id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
// print_r($c);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<br><br>
	<center>
	<div class="container">
		<h1 class="text-dark">EMPLOYEE VIEW</h1>
		<br>
	<table class="table">
		<tr class="bg-primary">
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>D.O.B</th>
			<th>PASSWORD</th>
			<th>COLLEGE</th>

		</tr>
		<tr>
			<td><?php echo $c['id']?></td>
			<td><?php echo $c['name']?></td>
			<td><?php echo $c['email']?></td>
			<td><?php echo $c['dob']?></td>
			<td><?php echo $c['password']?></td>
			<td><?php echo $c['college']?></td>
		</tr>

	</table>
</div>
</center>

	

</body>
</html>