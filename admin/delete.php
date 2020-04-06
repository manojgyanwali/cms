<?php 

include('includes/dbcon.php');
 
 




$qry="delete  from posts where id={$_REQUEST['id']}";
$result=$conn->query($qry);

header('location:post.php');





?>