<?php

include "../config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All-Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="../common.css">
       </head>
       
  <body>
    <div class="container">
  <button type="button"  class="add my-5" ><a href= "addusers.php" class="text-light">add user</a>
</button>
<button type="button"  class="logout my-5"><a href= "../logout.php" class="text-light">logout</a>
</button>
</div>
<table class="table  table-responsive my=10">
  <thead>
    <tr>
      <th scope="col" >id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="select *from users";
$result=mysqli_query($conn,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$username.'</td>
        <td> '.$email.'</td>
        <td> '.$password.'</td>

<td>
    <button class="update" >
     <a href="update.php?updateid='.$id.'"class="text-light">update</a>
</button>
    <button  class="delete" >
    <a href="delete.php?deleteid='.$id.' " class="text-light">delete</a></button>
</td>
</tr>';

}
}
?>


  </tbody>
</table>




  </body>
</html>