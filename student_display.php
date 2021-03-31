<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>password</th>
      <th>city</th>
      <th>gender</th>
      <th>qualification</th>
      <th>action</th>
    </tr>
    <?php
    include "dvcon.php";
    $data = "select * from test";

    $query = mysqli_query($con,$data);

     while ($result = mysqli_fetch_array($query)) {

    ?>
     <tr>
            <td><?php echo $result['id']?></td>
            <td><?php echo $result['name']?></td>
            <td><?php echo $result['password']?></td>
            <td><?php echo $result['city']?></td>
            <td><?php echo $result['gender']?></td>
            <td><?php echo $result['qualification']?></td>
            <td>
            <a href="student_view.php?id=<?php echo $result['id']?>">view</a>
            <a href="student_edit.php?id=<?php echo $result['id']?>">edit</a>
            <a href="student_delete.php?id=<?php echo $result['id']?>">delete</a>
          </td>
          </tr>


          <?php
      }
           ?>
  </table>

</body>
</html>