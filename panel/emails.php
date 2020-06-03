<?php
session_start();
require_once('config.php');
$sql = "SELECT * FROM user_info";
$query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
$fetch = mysqli_fetch_assoc($query);
if($_SESSION['username'] != $fetch['username']){
    header("Location: http://gagandeep95.com/panel/login.php");
        exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>CDA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">CDA</a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="color:#fff" class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                    <ul class="navbar-nav ml-auto"  >
                        <li class="nav-item " ><a class="nav-link"  href="index.php">Dashboard</a></li>
                        <li class="nav-item " ><a class="nav-link"  href="pages.php">Pages</a></li>
                        <li class="nav-item"><a class="nav-link " href="emails.php">Emails</a></li>
                        <li class="nav-item"><a class="nav-link " href="logout.php">Log-Out</a></li> 
                    </ul>
                </div>
</nav>
<br>
<br>
<main class="container-fluid">
<div class="row">
     <div class="col-md-2"></div> 
    <div class="col-md-8 contentSection" >
        
        <h3>EMAILS</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>Email</th>
                <th>MESSAGE</th>
                <!-- <th>DELETE</th> -->
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT * FROM emails ORDER BY id DESC";
            $query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                 ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['msg']?></td>
                </tr>

            <?php            
                }
                } 
            ?>
                
            </tbody>
        </table>
    
    </div>
    </div>
</div>
</main>
</body>
</html>
