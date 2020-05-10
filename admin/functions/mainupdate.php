<?php

include "../assets/template/header.php";

$current = "Update";

include "../assets/template/main.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

  $query = "SELECT * FROM `main` WHERE `id` = $id"; 

$res = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($res);


}else{
    header('location:../index/');
}

if (isset($_POST['submit'])) {

   
$head = $_POST['head'];
$para=$_POST['para'];
$pic=$_FILES['pic'];
$picName = $pic['name'];
if(move_uploaded_file($pic['tmp_name'], "../../img/".$picName)){
$query ="UPDATE `main` SET `pic` = '$picName', `head` = '$head', `para` = '$para' WHERE `main`.`id` = $id";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../index/'; </script>";
    exit();
}

}else{
    $query ="UPDATE `main` SET  `head` = '$head', `para` = '$para' WHERE `main`.`id` = $id";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../index/'; </script>";
      exit();

}
}

}

?>
 

<h3><?php echo $row['name']; ?></h3>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="head">Title</label>
    <input type="text" class="form-control" id="head" placeholder="Title" value="<?php echo $row['head']; ?>" name="head">
  </div>
  
  <div class="form-group">
    <label for="para">paragraph</label>
    <textarea class="form-control" id="para" rows="3" name="para"><?php echo $row['para']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="pic">image</label>
    <input type="file" class="form-control-file" id="pic" name="pic" value="<?php echo $row['pic']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>




 
<?php

include "../assets/template/footer.php";

?>
