<?php

    include "dvcon.php";
       $a = $_POST['name'];
       $b = $_POST['college'];
       $c = $_POST['gender'];
       $d = $_POST['education'];

  $data ="insert into user(name,collage,gender,education) value ('$a','$b','$c','$d')";
        mysqli_query($con,$data);

?>