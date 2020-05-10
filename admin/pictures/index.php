<?php

include "../assets/template/header.php";

$current = "Pictures";

include "../assets/template/main.php";

$query = "SELECT * FROM `pics` ORDER BY regtime DESC ";


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
   width:100%;
 }
 
 } 


 
.gala {
  -webkit-column-count: 3;
  /* Chrome, Safari, Opera */
  -moz-column-count: 3;
  /* Firefox */
  column-count: 3;
 }

 .gala .galacontain {
  width: 100%;
  padding: 7px 0;
  position:relative;
  text-align:center;
 } 

.gala .galacontain img {
  width: 100%;
 }

.gala .galacontain a {
  position: absolute;
    left: 50%;
    bottom: 30px;
    transform: translate(-50%, -50%);
    display:none;
 }
.gala .galacontain h3 {
  position: absolute;
    left: 50%;
    top: 20%;
    font-weight: 700;
    transform: translate(-50%, -50%);
    display:none;
 }

@media (max-width: 700px) {
  .gala {
    -webkit-column-count: 1;
    /* Chrome, Safari, Opera */
    -moz-column-count: 1;
    /* Firefox */
    column-count: 1; 
  } 
}

 </style>


<!-- content -->

<section class="picture">

<a href="../functions/picinsert.php" class="btn btn-primary">Add</a>




    <div class="gala">

<?php  if ($res = mysqli_query($conn,$query)) :
   while ($row = mysqli_fetch_assoc($res)) :  ?>
   
   <div class="galacontain">
     <h3><?php echo $row['title']; ?></h3>
        <a href="../functions/picremove.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Remove</a>
   <img src="../../img/gallery/<?php echo $row['pic']; ?>" alt="." >
</div>
    <?php
   endwhile;
   endif;
 ?>

</div>
    



</section>

<!-- content end -->
<script>

  // image hover animation

</script>


<?php

include "../assets/template/footer.php";

?>
