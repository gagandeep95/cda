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
  <script src="https://cdn.tiny.cloud/1/ojm8unx3ju5qdyaz257e376f61fs7mkgya2j1wx9tkr1nrob/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
        <div class="col-md-8 contentSection" >
            <h3>EDIT PAGES CONTENT</h3>
            <!-- Button to Open the Modal -->

<?php

            if(isset($_POST['submit'])){
    $_page_name = mysqli_real_escape_string($conn,$_POST['page_name']);
    $_title = mysqli_real_escape_string($conn,$_POST['title']);
    $_content = mysqli_real_escape_string($conn,$_POST['content']);

    $sql   =  "INSERT INTO page_content(page_name,title,content)VALUES('$_page_name','$_title','$_content')";
    $query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
    if($query){
        header("Location: http://gagandeep95.com/panel/index.php");
    }
    else{
        echo'<div class="alert alert-danger">
        <strong>ALert!</strong> Something went wrong!
    </div>';
    }
}

?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            + Content
            </button>
                <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                                                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">ADD Content</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                                                        <!-- Modal body -->
                        <div class="modal-body">
                            <form  method="post">
                                <div class="form-group">
                                    <label for="sel1">Select Page:</label>
                                    <select class="form-control" id="pageid" name="page_name">
                                        <option>index.php</option>
                                        <option>contact.php</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">Title:</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content:</label>
                                        <textarea class="form-control" id="mytextarea" placeholder="Enter Content" name="content"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="submit" value="POST" >
                            </form>
                        </div>

            </div>
            </div>
            </div>    
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>PAGE_NAME</th>
                    <th>CONTENT_HEADING</th>
                    <th>CONTENT</th>
                    <!-- <th>EDIT</th>
                    <th>DELETE</th> -->
                    </tr>
                </thead>
                <tbody>

                <?php
                    $sql = "SELECT * FROM page_content ORDER BY id DESC";
                    $query = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
                    if (mysqli_num_rows($query) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($query)) {
                        ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['page_name']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td ><div style="overflow:hidden!important;height:20px;width:100px"><?php echo $row['content']; ?></div></td>
                    </tr>
                        <?php

                        }
                      } else {
                        echo "0 results";
                      }

                ?>
                                   
                </tbody>
            </table>
        
        </div>

            <div class="col-md-1"></div>

        

        <section class="col-md-3 imageSection">

        <?php
        if(isset($_POST["upload"])) {
            $page_name = mysqli_real_escape_string($conn,$_POST['page_name']);
            $target_dir = "../assets/";
            $target_file = $target_dir . basename($_FILES["pic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            //         // Check file size
            if ($_FILES["pic"]["size"] > 500000) {
            echo "<script>alert('Image SIZE is larger than 5mb.')</script>";
            }
              
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed')</script>";   
                }
            
            
            // Check if $uploadOk is set to 0 by an error
            $fileName =  $_FILES["pic"]["name"];
            if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
                $sql   =  "UPDATE pics SET pic = '$fileName' WHERE page_name = '$page_name'";
                $query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
                if($query){
                    echo'<div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> pic has been updated.
                  </div> ';           
                }
               
            } else{
                echo'<div class="alert alert-danger">
                <strong>ALert!</strong> Something went wrong!
            </div>';
            }
        }

        
        ?>

        <h3>Choose Image:</h3>
            <form method="post" enctype="multipart/form-data" />
                <div class="form-group">
                    <label for="sel1">Select Page:</label>
                    <select class="form-control" id="pageid" name="page_name">
                        <option>index.php</option>
                        <option>contact.php</option>

                    </select>
                </div>
                <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" placeholder="Upload" name="pic">
                </div> 
                <div class="form-group">           
                    <button type="submit" class="form-control btn btn-primary" name="upload">Update</button>
                </div>    
            </form>
    <br>
            <h3>Images</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>PAGE</th>
                    <th>IMAGE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM pics";    
                    $query = mysqli_query($conn,$sql) or die("Error : " . mysqli_error($conn));
                    if (mysqli_num_rows($query) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($query)) {    
                    ?>
                    
                    <tr>
                        <td><?php echo $row['page_name'] ?></td>
                        <td><?php echo'<img src="../assets/'.$row["pic"].'" width="100" height="50">'?></td>   
                    <?php 
                        }}
                    ?>
                    </tr>
                    
                </tbody>
            </table> 
        </section>
        

    
        </div>
    </div>
    </main>
</body>
</html>
