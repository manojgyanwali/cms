<?php   
session_start();
include('includes/dbcon.php');
 if(isset($_SESSION['a_email']))
 {
    echo  "";
 }

 else{
  header('location:login.php');
 }

 
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/dbcon.php');
    include('includes/sidebar.php');
?> 


        
                <?php
                    include('includes/dbcon.php');
                    $qry="select feature_image from posts order by id desc";
                    $result=$conn->query($qry);
                    
                    
                    while($data=$result->fetch(PDO::FETCH_ASSOC))
                    {
                ?>                     

                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                                

                        
                              
                                    <img src="../upload_images/<?php echo $data['feature_image']; ?>"  alt="..." class="img-fluid"  style="height:300px;width:350px;">
                                
                        

                    </div>

                   <?php
                    }
                   ?>

        


           
</div>
</div>

 <script src="../js/jquersdfsfy.min.js"></script>
<script src="../js/bootstggggsrap.min.js"></script>   

</body>
</html>




