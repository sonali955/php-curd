<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		  <br>
		<h1 class="text-info text-center">SIGNUP</h1>
        <form method="post" action="login.php">
		 <div class="form-group">
		 	<label>NAME:</label>
		 	<input type="text" name="name" class="form-control">
		 </div>

		 <div class="form-group">
		 	<label>Email:</label>
		 	<input type="text" name="email" class="form-control">
		 </div>

		 <div class="form-group">
		 	<label>Password:</label>
		 	<input type="password" name="password" class="form-control">
		 </div>
         <div class="form-control">
         	<label>Roll:</label>
         	<select name="roll" class="form-control">
         	<option>select roll</option>
         	<option>admin</option>
         	<option>student</option>
         	<option>hr</option>
         </select>
         </div>
		 <!-----------------end from group---------------->
         <br>
         <input type="submit" name="" value="Submit" class="btn btn-info btn-block">
     </form>
      <a href="signin_in.php">sign in</a>
    </div><!---------------- end container------------->
 
</body>
</html>