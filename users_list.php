<?php
include 'config.php';
$query="SELECT * FROM user_form";
$data=mysqli_connect($conn,$query);
$total=mysqli_num_rows($data);
echo $total;

   



?>
