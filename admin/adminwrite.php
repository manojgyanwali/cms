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



            <div class="col-md-5 col-md-5 col-sm-12 mt-5">
                            
                <form action="" method="POST" enctype="multipart/form-data">
                    <textarea name="title" placeholder="title"> </textarea></br>

                    <input type="file" name="file"></br>
                    <?php
                     if(isset($message))
                     {
                         echo $message;
                    }
                     ?></br>
                    <textarea name="ckeditor" id="ckeditor" class="ckeditor"></textarea>
                    <input type="submit" name="publish" value="publish">
                           
                           
                </form>

            </div>
    
</div>
</div>

 <script src="../js/jquersdfsfy.min.js"></script>
<script src="../js/bootstggggsrap.min.js"></script>   
<script src="../js/ckeditor/ckeditor.js"></script>    
</body>
</html>
<?php 
if(isset($_REQUEST['publish']))
{
    $data=$_REQUEST['ckeditor'];
    $title=$_REQUEST['title'];
    $tmpname=$_FILES['file']['tmp_name'];
    $imagename=$_FILES['file']['name'];
    //echo $tmpname;
        if($imagename=="")
        {
            $message="select image firstsdfhasdkfhashfakhfahlakhlakhfahfkahfsahfsdkfhask
            hfkafh afkjhaskfhaskjfh asdfkashfaskf askfaskfhaksjksd fahakhfa 
             faskjfhakhfakshfas faskjfhahsf";
            
        }
        else
        {
            move_uploaded_file($tmpname,"../upload_images/".$imagename);
          
            
            
            $qry="insert into posts(title,content,feature_image) value('$title','$data','$imagename')";
            $conn->exec($qry);
            header('location:post.php');

           

        }
    
  
    

}


?>
