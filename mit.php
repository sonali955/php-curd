<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		  <br>
		<h1 class="text-info text-center">REGISTRACTION FORM</h1>
        <form method="post" action="mit_insert.php">
		 <div class="form-group">
		 	<label>NAME:</label>
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
		 	<label>Password:</label>
		 	<input type="password" name="password" class="form-control">
		 </div>

		 <div class="form-group">
		 	<label>College:</label>
		 	<select class="form-control"  name="college">
		 		<option>select college</option>
		 		<option>ITM</option>
		 		<option>MITS</option>
		 		<option>JIWAJI</option>
		 		<option>GITS</option>
             </select>
          </div>
          <div class="form-control">
         	<label>gender</label>
         	<input type="radio" name="" >
         </div>
         <!-----------------end from group---------------->
         <br>
         <input type="submit" name="" value="Submit" class="btn btn-info btn-block">
     </form>

    </div><!---------------- end container------------->
 
</body>
</html>