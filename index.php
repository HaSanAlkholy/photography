	<?php

	include "admin/functions/connect.php";
	include "assets/header.php";


	?>


	<style>
		.carousel-item p {
			float: right;
			width: 50%;
		}

		@media (max-width:800px) {
			.carousel-item p {
				float: right;
				width: auto;
			}
		}

		@media (max-width:700px) {
			.carousel-1 {
				background-position: 70%;
				;
			}
		}
	</style>

	</head>

	<body>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">

						<?php
						$query = "SELECT * FROM `main` WHERE `id` = 8";

						$res = mysqli_query($conn, $query);

						$row = mysqli_fetch_assoc($res);

						?>


						<div class="logo">
							<a href="#home"><img src="img/<?php echo $row['pic']; ?>" alt="."></a>
						</div>
						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="#home">Home</a>
								<a href="#about">About Me</a>
								<a href="#gallery">Resent pics</a>
								<a href="#blog">Recent Blogs</a>
								<a href="#contact">Contact</a>
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
		<!-- start banner Area -->
		<section class="banner-area relative" id="home">
			<div class="slider">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<!-- Slide One - Set the background image for this slide in the line below -->
						<?php
						$query = "SELECT * FROM `main` WHERE `id` = 1";

						$res = mysqli_query($conn, $query);

						$row = mysqli_fetch_assoc($res);

						?>

						<div class="carousel-item active carousel-1" style="background-image: url('img/<?php echo $row['pic']; ?>')">
							<div class="carousel-caption d-md-block">
								<h2 class="text-uppercase"><?php echo $row['head']; ?></h2>
								<p>
									<?php echo $row['para']; ?>
								</p>
							</div>
						</div>
						<!-- Slide Two - Set the background image for this slide in the line below -->

						<?php
						$query = "SELECT * FROM `main` WHERE `id` = 2";

						$res = mysqli_query($conn, $query);

						$row = mysqli_fetch_assoc($res);

						?>

						<div class="carousel-item" style="background-image: url('img/<?php echo $row['pic']; ?>')">
							<div class="carousel-caption d-md-block">
								<h2 class="text-uppercase"><?php echo $row['head']; ?></h2>
								<p>
									<?php echo $row['para']; ?>
								</p>
							</div>
						</div>
						<!-- Slide Three - Set the background image for this slide in the line below -->
						<?php
						$query = "SELECT * FROM `main` WHERE `id` = 3";

						$res = mysqli_query($conn, $query);

						$row = mysqli_fetch_assoc($res);
						?>

						<div class="carousel-item " style="background-image: url('img/<?php echo $row['pic']; ?>')">
							<div class="carousel-caption d-md-block">
								<h2 class="text-uppercase"><?php echo $row['head']; ?></h2>
								<p>
									<?php echo $row['para']; ?>
								</p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>
		<!-- End banner Area -->


		<!-- Start About Area -->

		<?php
		$query = "SELECT * FROM `main` WHERE `id` = 6";

		$res = mysqli_query($conn, $query);

		$row = mysqli_fetch_assoc($res);

		?>

		<section class="About-area section-gap" id="about">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-lg-6 about-left">
						<img class="img-fluid" src="img/<?php echo $row['pic']; ?>" alt=".">
					</div>
					<div class="col-lg-6 about-right">
						<h1>
							<?php echo $row['head']; ?>
							<!--<div id="heart-like" class="heart-like-margin"><i class="fas fa-heart"></i></div>-->
						</h1>
						<p>
							<?php echo $row['para']; ?>
						</p>
						<a href="#contact">
							<button class="submit-btn primary-btn mt-20 text-uppercase ">Contact Me<span class="lnr lnr-arrow-right"></span></button></a>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->

		<!-- Start gallery Area -->
		<section class="gallery-area section-gap" id="gallery">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 pb-30 header-text">
						<h1 class="text-white">My Recent pictures</h1>
					</div>
					
				</div>
				<div class="gal">


					<?php

					$query = "SELECT * FROM `pics` ORDER BY regtime DESC LIMIT 13 ";
					if ($res = mysqli_query($conn, $query)) :
						while ($row = mysqli_fetch_assoc($res)) :
							?>

							<a href="img/gallery/<?php echo $row['pic']; ?>"><img src="img/gallery/<?php echo $row['pic']; ?>" alt=".."></a>


					<?php
						endwhile;
					endif;
					?>


				</div>
			</div>
		</section>




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

					$query = "SELECT * FROM `blogs` ORDER BY regtime DESC LIMIT 3 ";
					if ($res = mysqli_query($conn, $query)) :
						while ($row = mysqli_fetch_assoc($res)) :
							?>



							<div class="single-blog col-lg-4 col-md-4">

								<a href="assets/blogpost.php?id=<?php echo $row['id']; ?>"><img class="f-img img-fluid mx-auto" src="img/gallery/<?php echo $row['pic']; ?>" alt=""></a>
								<h4>
									<a href="assets/blogpost.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
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

		<!-- Start contact Area -->

		<?php
		$query = "SELECT * FROM `main` WHERE `id` = 7";

		$res = mysqli_query($conn, $query);

		$row = mysqli_fetch_assoc($res);

		?>

		<section class="contact-area" id="contact">
			<div class="container-fluid">
				<div class="row d-flex justify-content-end align-items-center">
					<div class="col-lg-5 col-md-12 contact-left no-padding">
						<img class="img-fluid" src="img/<?php echo $row['pic']; ?>" alt=".">
					</div>
					<div class="col-lg-7 col-md-12 contact-right no-padding">
						<h1><?php echo $row['head']; ?></h1>


						<form action="contact.php" method="post">
						<?php
								if (isset($_GET['msgerr'])) {
									$msgerr = $_GET['msgerr'];
									if ($msgerr == 0) { ?>
										<div class="alert-msg alert alert-danger">Your message has been sent</div>
									<?php
										} elseif ($msgerr == 1) { ?>
										<div class="alert-msg alert alert-danger">Unable to send your message</div>
									<?php
										} elseif ($msgerr == 1) { ?>
										<div class="alert-msg alert alert-success">There was a problem connecting to the database</div>
									<?php
										} else { ?>
										<div class="alert-msg"></div>
								<?php
									}
								}
								?>
							<div class="row">
								<div class="col-lg-12 d-flex flex-column">
									<input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" class="form-control mt-20" type="text" required>
								</div>
								<div class="col-lg-12 d-flex flex-column">
									<input name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required type="email">
								</div>
								<div class="col-lg-12 flex-column">
									<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
								</div>

								<div class="col-lg-12 d-flex justify-content-end">
									<button class=" primary-btn mt-20 text-uppercase" name="submit">Submit<span class="lnr lnr-arrow-right"></span></button>
								</div>
								

							</div>
						</form>
					</div>
				</div>
		
          			</div>
          </div>

		</section>
		<!-- End contact Area -->

		<?php
	include "assets/footer.php";
		?>