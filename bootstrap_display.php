<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<br>
	<center>
	<div class="container">
		<h1 class="text-info">EMPLOYEE LIST</h1>
		<br>
	<table class="table">
		<tr class="bg-info">
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>D.O.B</th>
			<th>PASSWORD</th>
			<th>COLLEGE</th>
			<th>ACTION</th>
		</tr>
		<?php 
          include "dvcon.php";
		$data="select *from emp";
		$query=mysqli_query($con,$data);
		// $result=mysqli_fetch_array($query);
		
		while ($result=mysqli_fetch_array($query)){
			// echo "<pre>";
			// print_r($result);
		
		?>
		<tr>
			<td><?php echo $result['id']?></td>
			<td><?php echo $result['name']?></td>
			<td><?php echo $result['email']?></td>
			<td><?php echo $result['dob']?></td>
			<td><?php echo $result['password']?></td>
			<td><?php echo $result['college']?></td>
			<td>
				<a href="bootstrap_view.php?id=<?php echo $result['id']?>" class="btn btn-dark">View</a>
				<a href="bootstrap_edit.php?id=<?php echo $result['id']?>" class="btn btn-warning">Edit</a>
				<a href="bootstrap_delete.php?id=<?php echo $result['id']?>" class="btn btn-danger">Delete</a>
			</td>

		</tr>
	<?php 
    }?>
	</table>
</center>
</div>

</body>
</html>