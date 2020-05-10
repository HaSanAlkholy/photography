<?php

include "../assets/template/header.php";

$current = "Messages";

include "../assets/template/main.php";


?>






<style>
    .main th,
    .main td {
        border: none;
        text-align: center;
    }
</style>


<!-- content -->

<section class="messages">


    <table class="table table-hover table-striped my-4">
        <thead>
            <tr class="bg-dark text-light">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>




            <?php
            $query = "SELECT * FROM `messages` ORDER BY regtime DESC ";
            if ($res = mysqli_query($conn, $query)) :
                while ($row = mysqli_fetch_assoc($res)) :  ?>

                    <tr>
                        
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td style="width:25%;">
                            <p style="max-height:150px;overflow:hidden">
                                <?php echo $row['message']; ?>
                            </p>
                        </td>                   
                        <td><a href="../functions/msgremove.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Remove</a></td>
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