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


    $id=$_REQUEST['id'];

    $qry="select *from posts where id=$id";
    $result=$conn->query($qry);
    if($result->rowCount()>0) 
    {
        
        $data=$result->fetch(PDO::FETCH_ASSOC);
    }
?> 



            <div class="col-md-5 col-md-5 col-sm-12 mt-5">
                            
                <form action="update.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
                    <textarea name="title" placeholder="title"><?php echo $data['title']; ?> </textarea>
                    <textarea name="ckeditor" id="ckeditor" class="ckeditor"> <?php echo $data['content']; ?></textarea>
                    <input type="submit" name="update" value="update">
                           
                           
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
    
  $qry="insert into posts(title,content) value('$title','$data')";
  $conn->exec($qry);
    

}


?>
