<?php
include "../config.php";
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password = md5($_POST['password']);
  

$sql="insert into users(username,email,password)
values ('$username','$email','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    // echo "successfully inserted";
header('location:display_users.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{ font: 14px sans-serif;
            background-color:orange; }
       .wrapper{ width: 360px; padding: 20px;  
          }
        </style>
</head>
<body>
<div class=nav>
    <h5>Insert User Details:<h5>
</div>

    <div class="wrapper" my=10>
        
        <form action=" " method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" class="box">
                
            </div>    
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control"class="box">
                
            </div> 
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control " class="box">
                
            </div>
           
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-dark" value="insert">
                
            </div>
           
        </form>
    </div>    
</body>
</html>


