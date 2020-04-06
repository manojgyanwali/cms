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
                    <textarea name="title" placeholder="title"> </textarea>
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
if(isset($_REQUEST['update']))
{
    $data=$_REQUEST['ckeditor'];
    $title=$_REQUEST['title'];
    
  $qry="update posts set title='$title',content='$data' where id={$_REQUEST['id']};";
  $conn->exec($qry);

  header("location:edit.php?id=".$_REQUEST['id']);
    

}


?>
