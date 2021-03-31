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
		<h1 class="text-info text-center"> Form</h1>
	

	<form method="post" action="user_insert.php">
		<div class="form-group">
			<label>Name:</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label>Email:</label>
			<input type="text" name="email" class="form-control">
		</div>

		<div class="form-group">
			<label>D.O.B:</label>
			<input type="date" name="dob" class="form-control">
		</div>
		<div class="form-group">
			<label>Education:</label>
			<select name="education" class="form-control">
				<option>select</option>
				<option>bba</option>
				<option>bca</option>
				<option>mca</option>
				<option>btech</option>
			</select>
			
		</div>

		<div class="form-group">
			<label>Address:</label>
			<textarea class="form-control" name="address"></textarea>
			
		</div>
		<div class="form-group">
			<label>Qualification</label>
			<input type="checkbox" name="qualification[]" value="10th">10th
			<input type="checkbox" name="qualification[]" value="12th">12th
			<input type="checkbox" name="qualification[]" value="btech">btech
			
		</div>
		<div class="form-group">
			<label>gender</label>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			
		</div>


        <input type="submit" name="" value="submit" class="btn btn-info">

	</form>
</div>

	<!--container end-->


</body>
</html>