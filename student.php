<!DOCTYPE html>
<html>
<head>
	<title>student</title>
</head>
<body>
     <form method="post" action="student_insert.php">
     	name:
     	<input type="text" name="name">
     	<br><br>
     	password:
     	<input type="password" name="password">
     	<br><br>
     	gender:
     	<input type="radio" name="gender" value="male">male
     	<input type="radio" name="gender" value="female">female
     	<br><br>
     	city:
     	<select name="city">
     		<option>select city</option>
     		<option value="delhi"
           <?php
           if($d)['city']=='delhi'){
	    echo "selected";
           }
           ?>
     		>delhi</option>
     		<option value="gwalior">
     		 <?php
           if($d)['city']=='gwalior'){
	    echo "selected";
           }
           ?>
     		>gwalior</option>
     		<option value="agra"
     		 <?php
           if($d)['city']=='agra'){
	    echo "selected";
           }
           ?>
     		>agra</option>
     		<option value="jhansi"
     		 <?php
           if($d)['city']=='jhansi'){
	    echo "selected";
           }
           ?>
     		>jhansi</option>
     	</select>
     	<br><br>
     	qualification:
     	<input type="checkbox" name="qualification[]" value="10th">10th
     	<input type="checkbox" name="qualification[]" value="12th">12th
     	<input type="checkbox" name="qualification[]" value="bba">bba
     	<br><br>
     	<input type="submit" name="" value="submit">
     </form>

</body>
</html>