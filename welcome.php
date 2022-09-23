<?php 
include "./config.php";
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="welcom.css">

    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="common.css">
  <style>
    table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
tr:hover {background-color: orange;}
.logout-button {
  background-color: orange; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body>
  <div class="container">
    <?php echo "<h1 class='heading'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <button type="button" class="logout-button"><a href="logout.php">Logout</a></button>
</div>
<div class="main-section">
  <h1>Users List:</h1><br><br><br>
 <table class="table table-striped table-warning table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
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
<tr>';

}
}
?>
</div>

  </tbody>
</table>








</body>
</html>