<?php

$con =mysqli_connect("localhost","root","","pninfosys");
  
  if($con)
  {
  	echo "connect";
  }
  else 
  	{echo "no connect";
}
     
?>