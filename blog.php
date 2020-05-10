<?php
	
	include "admin/functions/connect.php";
	include "assets/header.php";


?>
	

			<style>
				.generic-banner-content p{
					margin:auto;
					width:60%;
				}
				@media (max-width:800px){
					.generic-banner-content p{				
					width:auto;
				}
				}
				</style>
		</head>
		<body>
			<!-- Start banner Area -->
			<?php
			$query = "SELECT * FROM `main` WHERE `id` = 5"; 

			$res = mysqli_query($conn,$query);
			
			$row = mysqli_fetch_assoc($res);
		
			?>
			<section class="generic-banner relative" style="background-image: url('img/<?php echo $row['pic']; ?>');background-position: center;background-size:cover;">
				<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
						<?php
						  $query = "SELECT * FROM `main` WHERE `id` = 8"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
							<div class="logo">
								<a href="index.php"><img src="img/<?php echo $row['pic']; ?>" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.php">Home</a>
									<a href="index.php#about">About Me</a>
									<a href="index.php#gallery">Recent Pictures</a>
									<a href="index.php#blog">Recent Blogs</a>
									<a href="index.php#contact">Contact</a>
									<a href="gallery.php">Gallery</a>	
									<a href="blog.php">Blog</a>	
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
		<!-- End Header Area -->	

		<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-10">
						<div class="generic-banner-content">

						<?php
						$query = "SELECT * FROM `main` WHERE `id` = 5"; 

						$res = mysqli_query($conn,$query);
						
						$row = mysqli_fetch_assoc($res);
						
						?>
							<h2 class="text-white"><?php echo $row['head']; ?></h2>
							<p class="text-white"><?php echo $row['para']; ?></p>
						</div>							
					</div>
				</div>
			</div>
		</section>		
		<!-- End banner Area -->
			


	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>My Recent Blogs</h1>
							
						</div>
					</div>
					<div class="row">	

					<?php

								$query = "SELECT * FROM `blogs` ORDER BY regtime desc ";
								if ($res = mysqli_query($conn,$query)) :
								while ($row = mysqli_fetch_assoc($res)) :  
						?>



						<div class="single-blog col-lg-4 col-md-4">

						<a href="assets/blogpost.php?id=<?php echo $row['id']; ?>"><img class="f-img img-fluid mx-auto" src="img/gallery/<?php echo $row['pic']; ?>" alt=""></a>
							<h4>
								<a href="assets/blogpost.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a>
							</h4>
							<p style="max-height:150px;overflow:hidden">
							<?php echo $row['content']; ?>
							</p>
							<a href="assets/blogpost.php?id=<?php echo $row['id']; ?>" class="btn btn-success float-right text-light">Read more</a>
						</div>


						
						<?php
							endwhile;
							endif;
							?>
					
																
					</div>
				</div>	
			</section>
			<!-- end blog Area -->	


		<?php
	include "assets/footer.php";
?>