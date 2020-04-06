<?php
        include('users/includes/header.php');
        include('users/includes/navbar.php');
       
?>
<div class="container-fluid">
  <div class="row">
        <!-- start main content area  -->
    <div class="col-lg-9 col-md-9 col-sm-12">

         <div class="row">
         
                  <?php
                    if(isset($_REQUEST['search']))
                    {
                        if($_REQUEST['search_box']=="")
                        {
                            header('location:index.php');
                        }
                        else{
                            echo "";
                        }

                        include('users/includes/dbcon.php');
                        $value=$_REQUEST['search_box'];
                        $sql="select *from posts where title like '$value' or content like '$value'or title like '%$value%' or content like '%value%'";
                        $result=$conn->query($sql);
                        $result=$conn->query($sql);
                        if($result->rowCount()>0)
                        {
                             while($data=$result->fetch(PDO::FETCH_ASSOC))
                            {
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card small">
                                <img src="upload_images/<?php echo $data['feature_image']; ?>" class="card-img-top"  style="height:300px;width:344px;" alt="...">
                                  <div class="card-body">
                                        <h5 class="card-title text-center" ><?php echo $data['title']; ?></h5>
                                        <p class="card-text"><?php echo $data['content']; ?></p>
    
                                        <form action="post.php" method="POST">
                                             
                                             <input type="hidden" value="<?php echo $data['id']?>" name="post_id" >
                                            <button type="submit" name="show_details" class="btn btn-danger btn-lg">show details</button>
                                              
                                        </form>
        
    
                                        <!-- <a href="users/post.php ? id=<?php echo $data['id'];?>"> Go somewhere </a> -->
                                  </div>
                              </div>
                              </div>
                        
    
    
    
                        <?php   
                            }
                        
                        ?>
    
                     
    
                            
    
                      
    
                       
                <?php
                        }
                else
                {
                        echo "no data found";
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
                <?php 
                   }
                   else
                   {
                       header('location:../index.php');
                   }
                ?>
                    

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>   
</body>
</html>