<?php
include "../config.php";
$id=$_GET['updateid'];
$sql="select *from users where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];



if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password = md5($_POST['password']);
   

$sql=" update users set id=$id,username='$username',email='$email',password='$password' where id=$id ";
$result=mysqli_query($conn,$sql);
if($result){
    // echo "successfully updated";
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
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper" my=5>
        
        <form action=" " method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value=<?php echo $username;?>>
                
            </div>    
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control"value=<?php echo $email;?>>
                
            </div> 
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value=<?php echo $password;?>>
                
            </div>
            
            <div class="form-group">
                <input type="submit" name="update" class="btn btn-primary" value="Update">
                
            </div>
           
        </form>
    </div>    
</body>
</html>