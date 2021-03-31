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
			<div class="row">
                <div class="col-md-1">
				</div>
                <div class="col-md-10">
                	<div class="container bg-info"><br>
	<h1 class="text-dark">REGISTRACTION LIST</h1><br>
	<table class="table">
		<tr class="bg-danger">
			<th>ID</th>
			<th>name</th>
			<th>image</th>
			<th>ACTION</th>
		</tr>
		<?php
		include "dvcon.php";
		$data="select * from image";
		$query=mysqli_query($con,$data);
		
		
		while($result=mysqli_fetch_array($query)){
			// echo "<pre>";
			// print_r($result);
		 
		?>
		<tr>
			<td><?php echo $result['id']?></td>
			<td><?php echo $result['name']?></td>
			
			<td><img src="<?php echo $result['image']?> " style="width:100px;height:50px;"></td>
			<td>
				<a href="login_view.php?id=<?php echo $result['id']?>" class=" btn btn-dark">VIEW</a>
				<a href="login_edit.php?id=<?php echo $result['id']?>" class=" btn btn-warning">EDIT</a>
				<a href="login_delete.php?id=<?php echo $result['id']?>" class=" btn btn-danger">DELETE</a>
			</td>
		</tr>
	<?php 
      } 
	?>
	</table>
</div>
</center>
            	</div>
                <div class="col-md-1">
            	</div>
            </div>
		</div>


</body>
</html>