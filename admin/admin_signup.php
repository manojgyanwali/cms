<?php
session_start();
include('includes/dbcon.php');
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
if(($email=="")|| ($password==""))
{
    $message="fill all fields";
    $_SESSION['message']=$message;
    header('location:signup.php');

}
else{
            $sql="select email from admin_signup where email='$email'";
            $result=$conn->query($sql);
            if($result->rowCount()>0) 
            {
                $message= "email id already exists";
                $_SESSION['message']=$message;
                header('location:signup.php');
            }

            else
            {
                $qry="insert into admin_signup (email,password) values('$email','$password') ";
                $conn->exec($qry);
                $message="sucessfully signup login to continue";
                $_SESSION['message']=$message;
                header('location:login.php');
                
            }


}






?>