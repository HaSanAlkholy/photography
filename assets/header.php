
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<?php
						  $query = "SELECT * FROM `main` WHERE `id` = 8"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
		<link rel="shortcut icon" href="img/<?php echo $row['pic']; ?>">
		<!-- Author Meta -->
		<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 2"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
		<meta name="author" content="<?php echo $row['val']; ?>">
		<!-- Meta Description -->
		<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 3"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
		<meta name="description" content="<?php echo $row['val']; ?>">
		<!-- Meta Keyword -->
		<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 4"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
		<meta name="keywords" content="<?php echo $row['val']; ?>">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 1"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
		<title><?php echo $row['val']; ?></title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/all.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel='stylesheet' href='css/simplelightbox.min.css' >
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
            <script type="text/javascript" src="js/all.min.js"></script>