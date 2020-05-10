<?php

include "../assets/template/header.php";

$current = "Users";

include "../assets/template/main.php";

$query = "SELECT * FROM `users` ";

if (isset($_GET['err'])) {
    $err = $_GET['err'];
}

?>
 





 <style>
 .main th, .main td{
     border:none;
     text-align:center;
 }
 
 @media (max-width:700px){
 .content{
   padding:5px !important;
 }
 .content .dashhead-title{
   margin:10px !important;
 }
 }

 </style>


<!-- content -->

<section class="users">

<?php
if (isset($err)):
    if ($err==1):
        ?>
<div class="alert alert-danger text-center">Cant Remove All Users</div>


        <?php
    endif;
    endif;
?>

<a href="../functions/adduser.php" class="btn btn-primary">Add User</a>

<table class="table table-hover table-striped my-4">
  <thead>
    <tr class="bg-dark text-light">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

<?php  if ($res = mysqli_query($conn,$query)) :
   while ($row = mysqli_fetch_assoc($res)) :  ?>
   
 <tr>
       <td scope="row"><?php echo $row['id']; ?></td>
      <th><?php echo $row['name'];?></th>
      <td><?php echo $row['email'];?></td>
      <td><a href="../functions/removeuser.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Remove</a></td>
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
