<?php

include "../assets/template/header.php";

$current = "Blog";

include "../assets/template/main.php";


?>






<style>
    .main th,
    .main td {
        border: none;
        text-align: center;
    }

    td img {
        width: 50%;
    }

    @media (max-width:700px) {
        td img {
            width: 120%;
        }

        .content {
            padding: 5px !important;
        }

        .content .dashhead-title {
            margin: 10px !important;
        }
    }
</style>


<!-- content -->

<section class="blog">

    <a href="../functions/addblog.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Add blog</a>

    <table class="table table-hover table-striped my-4">
        <thead>
            <tr class="bg-dark text-light">
                <th scope="col" colspan="2">Pic</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Update</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>




            <?php
            $query = "SELECT * FROM `blogs` ORDER BY regtime DESC ";
            if ($res = mysqli_query($conn, $query)) :
                while ($row = mysqli_fetch_assoc($res)) :  ?>

                    <tr style="max-height:200px;overflow:hidden;">
                        <td colspan=2 scope="row"> <img src="../../img/gallery/<?php echo $row['pic']; ?>"></td>
                        <td><?php echo $row['title']; ?></td>
                        <td style="width:25%;">
                            <p style="max-height:150px;overflow:hidden">
                                <?php echo $row['content']; ?>
                            </p>
                        </td>
                        <td><a href="../functions/blogupdate.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
                        <td><a href="../functions/blogremove.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Remove</a></td>
                    </tr>

            <?php
                endwhile;
            endif;
            ?>




        </tbody>
    </table>






</section>
<!-- content end -->

<?php

include "../assets/template/footer.php";

?>