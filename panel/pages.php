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
    
            <?php

            if(isset($_POST['meta_submit'])){
                $_page_name = $_POST['meta_page_name'];
                $_title = $_POST['meta_title'];
                $_content = $_POST['meta_content'];

                $sql   =  "INSERT INTO pages(page_name,meta_title,meta_desc)VALUES('$_page_name','$_title','$_content')";
                $query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
                if($query){
                    header("http://gagandeep95.com/panel/pages.php");
                }
                else{
                    echo'<div class="alert alert-danger">
                    <strong>ALert!</strong> Something went wrong!
                </div>';
                }
                }

            ?>
    <div class="col-md-8 metaSection" >
        <h3>META INFO</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            + META-TAG
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
                        <form method="post">
                            <div class="form-group">
                                <label for="sel1">Select Page:</label>
                                <select class="form-control" id="pageid" name="meta_page_name">
                                    <option>index.php</option>
                                    <option>contact.php</option>
                                </select>
                            </div>
                      
                            <div class="form-group">
                                <label for="sel1">Meta Title:</label>
                                <input type="text" class="form-control" name="meta_title" Placeholder="Please ENter Meta title">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Meta Description:</label>
                                <input type="text" class="form-control" name="meta_content" Placeholder="Enter Description">
                            </div>
                            <div class="form-group">           
                                <button type="submit" name="meta_submit" class=" form-control btn btn-primary">Upload</button>
                            </div>
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
                    <th>META TITILE</th>
                    <th>META CONTENT</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM pages ORDER BY id DESC";
                    $query = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
                    if (mysqli_num_rows($query) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($query)) {
                        ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['page_name']; ?></td>
                        <td><?php echo $row['meta_title']; ?></td>
                        <td ><?php echo $row['meta_desc']; ?></td>
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

        <section class="col-md-3 analyticSection">

        <h3>NO-INDEX</h3>
        
        <?php
        if(isset($_POST['update_index'])){
         $page_name = mysqli_real_escape_string($conn,$_POST['page_name']);
            

         $index = mysqli_real_escape_string($conn,$_POST['no-index']);
                        
            $sql = "UPDATE index_info SET ind = '$index' WHERE page_name = '$page_name'";
            
              $query = mysqli_query($conn,$sql) or die("ERROR: " . mysqli_error($conn));
            if($query){
              echo'<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Updated.
              </div> ';
            }
            else{
                echo'<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ALERT!</strong> Something wrong.
              </div> ';
            }

        }
    
            


        ?>

        <form method="post">
            <div class="form-group">
                <label for="sel1">Select Page:</label>
                <select class="form-control" id="pageid" name="page_name">
                    <option>index.php</option>
                    <option>contact.php</option>
                </select>
            </div>
            <div class="form-group">
                &nbsp;<label>No Index:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input"  value="yes" name="no-index">yes
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input" value="no" name="no-index">no
                </label>
            </div>
            <button type="submit" class="btn btn-primary form-control" name="update_index">UPDATE</button>
        </form>    
        <br><hr><br>


        <?php
        if(isset($_POST['submit_analytic'])){
         $page_name = mysqli_real_escape_string($conn,$_POST['page_name']);
         $tag_name = mysqli_real_escape_string($conn,$_POST['tag_name']);
         $content = mysqli_real_escape_string($conn,$_POST['content']);
         
                        
            $sql = "UPDATE site_info SET scripts = '$content' WHERE page_name = '$page_name' && tag_name = '$tag_name'";
            
              $query = mysqli_query($conn,$sql) or die("ERROR: " . mysqli_error($conn));
            if($query){
              echo'<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Updated.
              </div> ';
            }
            else{
                echo'<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ALERT!</strong> Something wrong.
              </div> ';
            }

        }
    
            


        ?>



        <h3>EDIT Analytics Tag:</h3>
        <form method="post">
            <div class="form-group">
                <label for="sel1">Select Page:</label>
                <select class="form-control" id="pageid" name="page_name">
                    <option>index.php</option>
                    <option>contact.php</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Select Analytic Tag:</label>
                <select class="form-control" id="pageid" name="tag_name">
                    <option>Facebook advertising pixel</option>
                    <option>Google Analytics</option>
                </select>
            </div>
            
            <div class="form-group">
            <label for="title">Meta Content:</label>
            <textarea rows="5" cols="50" class="form-control" id="mytextarea" placeholder="Enter Analytics Code" name="content" ></textarea>
            </div> 

            <div class="form-group">           
                <button type="submit" class=" form-control btn btn-primary" name="submit_analytic">Update</button>
            </div>    
        </form>
    </section>

    </div>
</div>
</main>
</body>
</html>
