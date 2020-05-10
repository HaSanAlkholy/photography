<?php

include "../assets/template/header.php";

$current = "Add Picture";

include "../assets/template/main.php";



if (isset($_POST['submit'])) {

   
$title = $_POST['title'];
$pic=$_FILES['pic'];
$picName = $pic['name'];
if(move_uploaded_file($pic['tmp_name'], "../../img/gallery/".$picName)){
$query ="INSERT INTO `pics` (`id`, `title`, `pic`) VALUES (NULL, '$title', '$picName')";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../pictures/'; </script>";
  exit();
}

}else{

echo "<script type='text/javascript'> document.location = '../pictures/'; </script>";
  exit();

}

}

?>
 



<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="head">Title</label>
    <input type="text" class="form-control" id="head" placeholder="Title" name="title">
  </div>
  
  <div class="form-group">
    <label for="pic">image</label>
    <input type="file" class="form-control-file" id="pic" name="pic" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>




 
<?php

include "../assets/template/footer.php";

?>
