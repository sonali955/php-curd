<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>college</th>
			<th>gender</th>
			<th>education</th>
			<th>action</th>
		</tr>
		<?php
		 include "dvcon.php";
		 $data ="select * from user";
		 $query = mysqli_query($con,$data);

		 while ($result = mysqli_fetch_array($query)){
		 	?>
		 	<tr>
		 		<td><?php echo $result['id']?></td>
		 		<td><?php echo $result['name']?></td>
		 		<td><?php echo $result['collage']?></td>
		 		<td><?php echo $result['gender']?></td>
		 		<td><?php echo $result['education']?></td>
		 		<td>
		 			<a href="from_view.php?id=<?php echo $result['id']?>">view</a>
		 			<a href="from_edit.php?id=<?php echo $result['id']?>">edit</a>
		 			<a href="">delete</a>
		 		</td>
		 	</tr>
		 	<?php
		 }
		 ?>
	</table>

</body>
</html>