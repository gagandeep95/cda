<?php
    require_once('panel/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CDA</title>
	 <meta charset="utf-8">
     
     <?php
     $sql = "SELECT * FROM pages WHERE page_name = 'index.php'";
     $query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
     if(mysqli_num_rows($query) > 0){
         while($row = mysqli_fetch_assoc($query)){

        echo '<meta name="'.$row["meta_title"].'" content="'.$row["meta_desc"].'">';
        }
        } 
    ?>

        
    <?php
        $sql = "SELECT * FROM index_info WHERE page_name = 'index.php'";
        $query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
        $fetch = mysqli_fetch_assoc($query);
        if($fetch['ind'] == 'yes'){
            echo '<meta name="robots" content="no-index>';
        } 
    ?>
     

     <link rel="stylesheet" href="css/hover.css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css" />

     <?php
     $sql = "SELECT * FROM site_info WHERE page_name = 'index.php'";
     $query = mysqli_query($conn,$sql) or die("Error:" . mysqli_error($conn));
     if(mysqli_num_rows($query) > 0){
         while($row = mysqli_fetch_assoc($query)){
        echo $row['scripts'];
        }
        } 
    
     ?>
   </head>
<body>
            <nav class="navbar navbar-expand-md  bg-white" id="navbar" >
                <img   id="logo" src="assets/Optimized-bemo-logo2.png" width="167" height="100" alt="Site logo"/></div>
                                                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="color:#fff" class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                    <ul class="navbar-nav ml-auto"  >
                        <li class="nav-item " ><a class="nav-link hvr-underline-reveal "  href="#">Main</a></li>
                        <li class="nav-item"><a class="nav-link hvr-underline-reveal " href="#">How To Prepare</a></li>
                            <li class="nav-item"><a class="nav-link hvr-underline-reveal " href="#">CDA Interview Questions</a></li>
                        <li class="nav-item"><a class="nav-link hvr-underline-reveal " href="contact.php">Contact Us</a></li> 
                    </ul>
                </div>  
            </nav>
            
            <div  class="container-fluid">
                <div id="big-Image">
                <?php 
                $sql = "SELECT * FROM pics WHERE page_name = 'index.php'";    
                $query = mysqli_query($conn,$sql) or die("Error : " . mysqli_error($conn));
                if (mysqli_num_rows($query) > 0) {
                // output data of each row
                $fetch = mysqli_fetch_assoc($query);

                echo'<img src="assets/'.$fetch["pic"].'" class="img-fluid" width="100%" alt="">';
                }
                ?>
                </div>
            </div>

            <article class="content">
                    <h5>Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview</h5>
                    
                    <?php
                    $sql = "SELECT * FROM page_content WHERE page_name = 'index.php'";    
                    $query = mysqli_query($conn,$sql) or die("Error : " . mysqli_error($conn));
                    if (mysqli_num_rows($query) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($query)) {    
                    ?>
                    <section>
                        <h5><?php echo $row['title']; ?></h5>
                        <p><?php echo $row['content']; ?></p>        
                    </section>
                    <?php
                        }}   
                    ?>
                 <h5>Reference:</h5>
                        <p>Poole A., Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental schools: the new CDA structured interview, a new personality assessment, and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.</p>
                    </section>
            </article>

            <footer class="row">
                    <div class="col-sm-9 copyright">
                       <p>©2013-2016 BeMo Academic Consulting Inc. All rights reserved.     <a href="#">Disclaimer & Privacy Policy </a>  <a href="contact.php">Contact Us</a> </p>
                   </div>
                   <div class="col-sm-3 social">
                       <a href="#"><i class="fa fa-facebook-official"></i></a>
                       <a href="#"><i class="fa fa-twitter-square"></i></a>
                   </div>
            </footer>



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="Assets/js/scripts.js"></script>

</body>
</html>