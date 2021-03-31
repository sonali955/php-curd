<?php 
include "dvcon.php";
$id=$_GET['id'];
$a="select *from emp where id=$id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
// print_r($c);
    
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		  <br><br><br>
		<h1 class="text-info text-center">REGISTRACTION FORM</h1>
        <form method="post" action="bootstrap_update.php">
        	<input type="hidden" name="id" value="<?php echo $c['id']?>">
		 <div class="form-group">
		 	<label>NAME:</label>
		 	<input type="text" name="name" class="form-control" value="<?php echo $c['name']?>">
		 </div>

		 <div class="form-group">
		 	<label>Email:</label>
		 	<input type="text" name="email" class="form-control" value="<?php echo $c['email']?>">
		 </div>

		 <div class="form-group">
		 	<label>D.O.B:</label>
		 	<input type="date" name="dob" class="form-control" value="<?php echo $c['dob']?>">
		 </div>

		 <div class="form-group">
		 	<label>Password:</label>
		 	<input type="password" name="password" class="form-control" value="<?php echo $c['password']?>">
		 </div>

		 <div class="form-group">
		 	<label>College:</label>
		 	<select class="form-control"  name="college">
		 		<option>select college</option>
		 		<option
		 		<?php 
		 		if($c['college']=='ITM'){
		 			echo "selected";
		 		}
		 		?>
		 		>ITM</option>
		 		<option
		 		<?php 
		 		if($c['college']=='MITS'){
		 			echo "selected";
		 		}
		 		?>
		 		>MITS</option>
		 		<option
		 		<?php 
		 		if($c['college']=='JIWAJI'){
		 			echo "selected";
		 		}
		 		?>
		 		>JIWAJI</option>
		 		<option
		 		<?php 
		 		if($c['college']=='GITS'){
		 			echo "selected";
		 		}
		 		?>
		 		>GITS</option>
             </select>
         </div><!-----------------end from group---------------->
         <br>
         <input type="submit" name="" value="Update" class="btn btn-info btn-block">
     </form>

    </div><!---------------- end container------------->
 
</body>
</html>