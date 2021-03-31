<?php
include "dvcon.php";
echo $id =$_GET['id'];
$a ="select * from nit where id=$id";
$b =mysqli_query($con,$a);
$result =mysqli_fetch_array($b);
//print_r($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<!--container start-->

	<div class="container">
		<br><br>
		<h1 class="text-info text-center">Bootstrap Form</h1>
	
        <input type="text" name="id" value="<?php echo $result['id'] ?>">
	<form method="post" action="user_update.php">
		<div class="form-group">
			<label>Name:</label>
			<input type="text" name="name" class="form-control" value="<?php echo $result['name'] ?>">
		</div>

		<div class="form-group">
			<label>Email:</label>
			<input type="text" name="email" class="form-control" value="<?php echo $result['email'] ?>">
		</div>

		<div class="form-group">
			<label>D.O.B.:</label>
			<input type="date" name="dob" class="form-control" value="<?php echo $result['dob'] ?>">
		</div>
		<div class="form-group">
			<label>Education:</label>
			<select name="education" class="form-control">
				<option>select</option>
				<option
				<?php
                  if($result['college']=='bba'){
                  	echo "selected";
                  }
				?> 
				>bba</option>
				<option
				<?php
				if($result['college']=='bca'){
					echo "selected";
				}
				?> 
				>bca</option>
				<option
				<?php
				if($result['college']=='mca'){
					echo "selected";
				}
				?>
				>mca</option>
				<option
				<?php
                 if($result['college']=="btech"){
                 	echo "selected";
                 }
				?>
				>btech</option>
			</select>
			
		</div>

		<div class="form-group">
			<label>Address:</label>
			<textarea class="form-control" name="address"><?php echo $result['address'] ?>"</textarea>
			
		</div>
		<div class="form-group">
			<label>Qualification</label>
			<input type="checkbox" name="qualification[]" value="10th">10th
			<input type="checkbox" name="qualification[]" value="12th">12th
			<input type="checkbox" name="qualification[]" value="btech">btech
			
		</div>
		<div class="form-group">
			<label>gender</label>
			<input type="radio" name="gender" value="male"
			<?php
			if($result['gender']=='male'){
				echo "checked";
			}
			?>
			>Male
			<input type="radio" name="gender" value="female"
			<?php
            if($result['gender']=='female'){
               echo "checked";
            }
			?>
			>Female
			
		</div>


        <input type="submit" name="" value="update" class="btn btn-info">

	</form>
</div>

	<!--container end-->


</body>
</html>