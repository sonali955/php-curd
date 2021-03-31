<?php
include "dvcon.php";
echo $id =$_GET['id'];
$a ="select * from test where id=$id";
$b =mysqli_query($con,$a);
$result =mysqli_fetch_array($b);
//print_r($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>student</title>
</head>
<body>
     <form method="post" action="student_update.php">
          <input type="text" name="id" value="<?php echo $result['id'] ?>">
     	name:
     	<input type="text" name="name" value="<?php echo $result['name'] ?>">
     	<br><br>
     	password:
     	<input type="password" name="password" value="<?php echo $result['password'] ?>">
     	<br><br>
     	gender:
     	<input type="radio" name="gender" value="male"
          <?php
          if($result['gender']=='male'){
               echo "checked";
          }
          ?>
          >male
     	<input type="radio" name="gender" value="female"
          <?php
          if($result['gender']=='female'){
               echo "checked";
          }
          ?>
          >female
     	<br><br>
     	city:
     	<select name="city">
     		<option>select city</option>
     		<option>delhi</option>
     		<option>gwalior</option>
     		<option>agra</option>
     		<option>jhansi</option>
     	</select>
     	<br><br>
     	qualification:
     	<input type="checkbox" name="qualification" value="10th">10th
     	<input type="checkbox" name="qualification" value="12th">12th
     	<input type="checkbox" name="qualification" value="bba">bba
     	<br><br>
     	<input type="submit" name="" value="update">
     </form>

</body>
</html>