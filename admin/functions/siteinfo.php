<?php

include "../assets/template/header.php";

$current = "Update";

include "../assets/template/main.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

  $query = "SELECT * FROM `info` WHERE `id` = $id"; 

$res = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($res);


}else{
echo "<script type='text/javascript'> document.location = '../index/'; </script>";
}

if (isset($_POST['submit'])) {

   
$name = $_POST['name'];
$val=$_POST['val'];

$query ="UPDATE `info` SET  `val` = '$val' WHERE `info`.`id` = $id";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../index/'; </script>";
}


}

?>
 

<h3><?php echo $row['name']; ?></h3>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $row['id']; ?>" method="post">
  
  <div class="form-group">
    <textarea class="form-control" id="val" rows="3" name="val"><?php echo $row['val']; ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>




 
<?php

include "../assets/template/footer.php";

?>
