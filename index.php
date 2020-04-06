<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <title>Document</title>

</head>
<body>

<?php

include('users/includes/navbar.php');

?>

<div class="container-fluid">
  <div class="row">
        <!-- start main content area  -->
    <div class="col-lg-9 col-md-9 col-sm-12">

         <div class="row">
                  <?php
                    include('users/includes/dbcon.php');
                    
                    $qry="select  *from posts order by id desc";
                  
                  $result=$conn->query($qry);
                    
                    
                    while($data=$result->fetch(PDO::FETCH_ASSOC))
                    {
                  ?>

                  <div class="col-lg-4 col-md-6 col-sm-12">

                        <div class="card small">
                            <img src="upload_images/<?php echo $data['feature_image']; ?>" class="card-img-top"  style="height:300px;width:344px;" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title text-center" ><?php echo $data['title']; ?></h5>
                                    <p class="card-text"><?php echo $data['content']; ?></p>

                                      <a href="post.php ?post_id=<?php echo $data['id'];?>">show details</a>
                              </div>
                          </div>

                   </div>

                   
            <?php
                    }
            ?>
                  

                     
          </div>
      </div>

          <!-- end main content area in 1st col -->

            <!-- start side bar -->
            <?php
                include('users/includes/sidebar.php');

            
            ?>

          <!-- end side bar -->
                
    </div>
    


    
  
   
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>   
</body>
</html>
           






 