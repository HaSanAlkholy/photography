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
    
    $id = $_GET['id'];

    $query =  "DELETE FROM `blogs` WHERE `id` = $id";
    mysqli_query($conn,$query);
    header('location: ../blog');
    exit();

}else{
    header('location: ../blog');
    exit();
}



?>