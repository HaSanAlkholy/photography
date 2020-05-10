<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("location: ../");
}

include "../admin/functions/connect.php";

?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <?php
    $query = "SELECT * FROM `main` WHERE `id` = 8";

    $res = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($res);

    ?>
    <link rel="shortcut icon" href="../img/<?php echo $row['pic']; ?>">
    <!-- Author Meta -->
    <?php
    $query = "SELECT * FROM `info` WHERE `id` = 2";

    $res = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($res);

    ?>
    <meta name="author" content="<?php echo $row['val']; ?>">
    <!-- Meta Description -->
    <?php
    $query = "SELECT * FROM `info` WHERE `id` = 3";

    $res = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($res);

    ?>
    <meta name="description" content="<?php echo $row['val']; ?>">
    <!-- Meta Keyword -->
    <?php
    $query = "SELECT * FROM `info` WHERE `id` = 4";

    $res = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($res);

    ?>
    <meta name="keywords" content="<?php echo $row['val']; ?>">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <?php
    $query = "SELECT * FROM `info` WHERE `id` = 1";

    $res = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($res);

    ?>
    <title><?php echo $row['val']; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="../css/linearicons.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel='stylesheet' href='../css/simplelightbox.min.css'>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">


    <style>
        .generic-banner-content p {
            margin: auto;
            width: 60%;
        }

        @media (max-width:800px) {
            .generic-banner-content p {
                width: auto;
            }
        }
    </style>
</head>

<body>
    <!-- Start banner Area -->
    <?php
    $query = "SELECT * FROM `main` WHERE `id` = 5";

    $res = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($res);

    ?>
    <section class="generic-banner relative" style="background-image: url('../img/<?php echo $row['pic']; ?>');background-position: center;background-size:cover;">
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
                            <a href="index.php"><img src="../img/<?php echo $row['pic']; ?>" alt=""></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="../index.php">Home</a>
                                <a href="../index.php#about">About Me</a>
                                <a href="../index.php#gallery">Recent Pictures</a>
                                <a href="../index.php#blog">Recent Blogs</a>
                                <a href="../index.php#contact">Contact</a>
                                <a href="../gallery.php">Gallery</a>
                                <a href="../blog.php">Blog</a>
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

                        $res = mysqli_query($conn, $query);

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
            <?php

            $query = "SELECT * FROM `blogs` WHERE id = $id";
            if ($res = mysqli_query($conn, $query)) :
                while ($row = mysqli_fetch_assoc($res)) :
                    ?>
                    <div class="row justify-content-center">
                        <div class="col-md-8 pb-30 header-text">
                            <h2><?php echo $row['title']; ?></h2>

                        </div>
                    </div>
                    <div class="row">

                        <img src="../img/gallery/<?php echo $row['pic']; ?>" alt=".." style="width:70%;margin:auto;">


                        <p class="my-4"style="font-size: 20px;letter-spacing: 2px;line-height: 35px;">
                            <?php echo $row['content']; ?>
                        </p>









                <?php
                    endwhile;
                endif;
                ?>


                    </div>
        </div>
    </section>
    <!-- end blog Area -->


    <!-- start footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between">
                <?php
                $query = "SELECT * FROM `info` WHERE `id` = 5";

                $res = mysqli_query($conn, $query);

                $row = mysqli_fetch_assoc($res);

                ?>
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white"> <?php echo $row['val']; ?> Copyright © 2019 All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://www.alkholy.tech" target="_blank">Alkholy.tech</a></p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <?php
                    $query = "SELECT * FROM `info` WHERE `id` = 6";

                    $res = mysqli_query($conn, $query);

                    $row = mysqli_fetch_assoc($res);

                    ?>
                    <a href="<?php echo $row['val']; ?>"><i class="fa fa-facebook"></i></a>
                    <?php
                    $query = "SELECT * FROM `info` WHERE `id` = 7";

                    $res = mysqli_query($conn, $query);

                    $row = mysqli_fetch_assoc($res);

                    ?>
                    <a href="<?php echo $row['val']; ?>"><i class="fa fa-instagram"></i></a>
                    <?php
                    $query = "SELECT * FROM `info` WHERE `id` = 8";

                    $res = mysqli_query($conn, $query);

                    $row = mysqli_fetch_assoc($res);

                    ?>
                    <a href="<?php echo $row['val']; ?>"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/parallax.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/simple-lightbox.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>