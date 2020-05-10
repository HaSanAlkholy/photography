<?php

include "../assets/template/header.php";

$current = "Main";

include "../assets/template/main.php";


?>
 





 <style>
 .main th, .main td{
     border:none;
     text-align:center;
 }
 td img{
   width:50%;
 }
 @media (max-width:700px){
  td img{
   width:150%;
 }
 .content{
   padding:5px !important;
 }
 .content .dashhead-title{
   margin:10px !important;
 }
 }

 </style>


<!-- content -->

<section class="main">



<table class="table table-hover table-striped my-4">
  <thead>
    <tr class="bg-dark text-light">
      <th scope="col">Name</th>
      <th scope="col" colspan="2">Pic</th>
      <th scope="col">Title</th>
      <th scope="col">Paragraph</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>




<?php
$query = "SELECT * FROM `main` ";
if ($res = mysqli_query($conn,$query)) :
   while ($row = mysqli_fetch_assoc($res)) :  ?>
   
 <tr>
      <th scope="row"><?php echo $row['name']; ?></th>
      <td colspan=2> <img src="../../img/<?php echo $row['pic']; ?>" ></td>
      <td><?php echo $row['head']; ?></td>
      <td><?php echo $row['para']; ?></td>
      <td><a href="../functions/mainupdate.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
    </tr>

    <?php
   endwhile;
   endif;
 ?>

   
    
    
  </tbody>
</table>



<!-- inf table -->

<h2>Site Info</h2>

<table class="table table-hover table-striped my-4">
  <thead>
    <tr class="bg-dark text-light">
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Value</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>

<?php
$query = "SELECT * FROM `info` ";
if ($res = mysqli_query($conn,$query)) :
   while ($row = mysqli_fetch_assoc($res)) :  ?>
   
 <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['val']; ?></td>
      <td><a href="../functions/siteinfo.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
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
