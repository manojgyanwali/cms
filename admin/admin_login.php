<?php 


 session_start();
include('includes/dbcon.php');


 if(isset($_REQUEST['login']))
 {
$email=  $_REQUEST['email'];
$password=  $_REQUEST['password'];


    	$sql="select  *from admin_signup where email='$email' and password='$password'";
      $result=$conn->query($sql);

    if($result->rowCount()>0) 
    {
          $data=$result->fetch(PDO::FETCH_ASSOC);
          $a_email= $data['email'];
          $_SESSION['a_email']=$a_email;
        
         
       header('location:dashboard.php');  
        
    }

    else
             {
                    header('location:login.php');
                   
                
            }


 }



            

            
        

?>