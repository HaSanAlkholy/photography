			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
					<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 5"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white"> <?php echo $row['val']; ?>  Copyright © 2019 All rights reserved   |    made with <i class="far fa-heart" aria-hidden="true"></i> by <a href="http://www.alkholy.tech" target="_blank">Alkholy.tech</a></p>
						<div class="col-lg-4 col-sm-12 footer-social">
						<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 6"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
							<a href="<?php echo $row['val']; ?>"><i class="fab fa-facebook-f"></i></a>
							<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 7"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
							<a href="<?php echo $row['val']; ?>"><i class="fab fa-instagram"></i></a>
							<?php
						  $query = "SELECT * FROM `info` WHERE `id` = 8"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
							<a href="<?php echo $row['val']; ?>"><i class="fab fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
			<script src="js/main.js"></script>	
		</body>
	</html>