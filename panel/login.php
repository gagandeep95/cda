<?php
session_start();
require_once('config.php');

if(isset($_POST['submit'])){
    $_username = mysqli_real_escape_string($conn,$_POST['username']);
    $_password = mysqli_real_escape_string($conn,$_POST['pwd']);
    
    $sql = "SELECT * FROM user_info";
    $result = mysqli_query($conn, $sql) or die("Error : " . mysqli_error($conn));
    $fetch = mysqli_fetch_assoc($result) ;
    if($fetch['username'] == $_username && $fetch['pwd'] == $_password){
        $_SESSION['username'] = $_username;
        header("Location: http://gagandeep95.com/panel/index.php");
        exit();
    }
    else{
        echo'<div class="alert alert-danger">
        <strong>ALert!</strong> Please Enter Valid Username and Password.
      </div>';
    }
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>CDA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="row">
        <div class="col-md-4" ></div>
        <div class="col-md-4 admin-form">
            <h2 class="text-center">C-Panel</h2>
            <form  method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                </div>
            
                <button type="submit" class="btn btn-primary" name="submit" >LOGIN</button>
            </form>
        </div>
        <div class="col-md-4"></div>    
    </div>

</body>
</html>
