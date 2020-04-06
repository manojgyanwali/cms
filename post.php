<?php
include('users/includes/header.php');
include('users/includes/navbar.php');
include('users/includes/dbcon.php');
?>




            
        

<div class="row"> 
       
       <?php
            
             
                $post_id= $_REQUEST['post_id'];
                $qry="select  *from posts where id=$post_id";
                $result=$conn->query($qry);
                $data=$result->fetch(PDO::FETCH_ASSOC);


                $qry2="select vies from posts where id=$post_id";
                $result2=$conn->query($qry2);
                $data2=$result2->fetch(PDO::FETCH_ASSOC);
                $view=$data2['vies']+1;

                $sql3="update posts set vies='$view' where id=$post_id";
                $result=$conn->query($sql3);
                ?>

    <!-- main post content area startin 1st column  -->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="card ">
                <img src="upload_images/<?php echo $data['feature_image']; ?>" class="card-img-top"  alt="..." style="height:400px;">
                <div class="card-body">
                    <h5 class="card-title text-center" ><?php echo $data['title']; ?></h5>
                    <p class="card-text"><?php echo $data['content']; ?></p>
                 </div>
            </div>

        </div> 
    <!-- main post  content area and 1st column end -->

    <!-- side bar  start in 2nd column -->
        
            <?php
                include('users/includes/sidebar.php');
            ?>
        
       
         <!-- side bar end in 2nd column -->



    <!-- related content area start -->
        <div class="col-sm-12">
        <h5  class="text-center">RELATED POSTS</h5>
            <div class="row"> 
               
                     <?php
                        $qry4="select  *from posts order by id asc limit 4";
                        $result4=$conn->query($qry4);
                         while($data4=$result4->fetch(PDO::FETCH_ASSOC))
                        {
                      ?>

                    <div class="col lg-4 md-6 sm-12">
                        <div class="card small">
                            <img src="upload_images/<?php echo $data4['feature_image']; ?>" class="card-img-top"  style="height:300px;width:344px;" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title text-center" ><?php echo $data4['title']; ?></h5>

                                       <form action="" method="POST">
                                            <input type="hidden" value="<?php echo $data4['id']?>" name="post_id" >
                                            <button type="submit" name="show_details" class="btn btn-danger btn-lg">show details</button>
                                        </form>
    

                                    <!-- <a href="users/post.php ? id=<?php echo $data['id'];?>"> Go somewhere </a> -->
                              </div>
                          </div>
                    </div>

                    <?php
                    }
                    ?>

          </div>
        </div>
    <!-- related content area end -->

</div>  <!-- end of row -->

<?php
include('users/includes/footer.php');
?>









