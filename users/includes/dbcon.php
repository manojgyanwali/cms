<?php
$servername="mysql:host=localhost; dbname=cms";
$user="root";
$password="";


try
{
    $conn= new PDO($servername,$user,$password);
   
}

catch(PDOException $e)
{
    echo "connection failed".$e->getMessage();
}




?>