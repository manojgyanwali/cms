 





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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow>"
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#jj">bla</a>
    </nav>



<?php 
    include('includes/sidebar.php');
  
?>

    <div class="col-md-5 col-md-5 col-sm-12">
         <div class="jumbotron">
            <h4>Recent Post</h4>
            <?php

                $qry="select title from posts order by id desc";
                $result=$conn->query($qry);
                if($result->rowCount()>0) 
                {
                    
                    while($data=$result->fetch(PDO::FETCH_ASSOC))
                    {
            ?>
                        <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#lkdlajlkf"><?php echo $data['title'];   ?></a>
                        </li>
                      </ul>
                      <span ><a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                    
        
                  
            <?php
              
                   }   
                }
            ?>
       
                        
    </div>

            </div>
        <div class="col-md-5 col-md-5 col-sm-12">
                
                <div class="jumbotron">
           
                        <h4>Recent Comments</h4>
                      
                        
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                            <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                             <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                                <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                        <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        
                </div>   
        </div>

        
    </div>
            
    
            
    </div>
    <form action="adminwrite.php" method="POST">
   
    <button type="submit" name="add" class="btn btn-danger btn-lg" style="margin-right:500px;">ADD</button>

    </forms>
    
    










<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>   
</body>
</html> 
