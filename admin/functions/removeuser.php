<?php

session_start();

if(!isset($_SESSION['user'])) {

    if(!isset($_COOKIE['stayin'])) {
       header('location:../index.php');
       exit();
    } 
}

require("connect.php");

if (isset($_GET['id'])) {

    $query = "SELECT * FROM `users` ";  
   if ($res = mysqli_query($conn,$query)) {
       if (mysqli_num_rows($res)>1) {
          $id = $_GET['id'];
    $query =  "DELETE FROM `users` WHERE `id` = $id";
    mysqli_query($conn,$query);
    header('location: ../users');
    exit();
       }else{
        header('location: ../users?err=1');
       }
   }  
    
}else{
    header('location: ../pictures');
    exit();
}



?>