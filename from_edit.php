<?php
include "dvcon.php";
$id = $_GET['id'];
$a = "select * from user where id=$id";
$b = mysqli_query($con,$a);
$result = mysqli_fetch_array($b);
//print_r($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <form method="post" action="from_update.php">
    
		Name:<input type="text" name="name" value="<?php echo $result['name']?>">
   
		<br>
		<br>
           College:<select name="college">
			<option value="select">Select</option>
			<option 
                <?php
        if($result['college']=='rjit'){
        	echo "selected";
        }
              ?>

			>RJIT</option>
			<option value="mpct"
              <?php
        if($result['college']=='mpct'){
        	echo "selected";
        }

                ?>
			>mpct</option>
			<option value="itm"
			 <?php
        if($result['college']=='itm'){
        	echo "selected";
        }

                ?>
			>itm</option>
			<option value="jaincollege"
			 <?php
        if($result['college']=='jaincollege'){
        	echo "selected";
        }

                ?>
			>jain college</option>
		    </select>
			<br>
			<br>
            Gender:<input type="radio" name="gender" value="male">Male
	           <input type="radio" name="gender" value="female">FeMale
	           <input type="radio" name="gender" value="other">other
               <br>
               <br>
     Education:<input type="checkbox" name="education" value="mca">MCA
        <input type="checkbox" name="education" value="ca">CA      
        <input type="checkbox" name="education" value="ma">MA
        <input type="checkbox" name="education" value="bba">BBA

        <br>
        <br>
     <input type="submit" name="a" value="update">
		
    </form>

</body>
</html>