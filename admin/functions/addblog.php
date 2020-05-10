<?php

include "../assets/template/header.php";

$current = "Add Blog";

include "../assets/template/main.php";



if (isset($_POST['submit'])) {

   
$title = $_POST['title'];
$content = $_POST['content'];
$pic=$_FILES['pic'];
$picName = $pic['name'];
if(move_uploaded_file($pic['tmp_name'], "../../img/gallery/".$picName)){
$query ="INSERT INTO `blogs` (`id`, `pic`, `title`, `content`) VALUES (NULL, '$picName', '$title', '$content')";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../blog/'; </script>";
}

}else{

echo "<script type='text/javascript'> document.location = '../blog/'; </script>";
  exit();

}

}

?>
 



<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content" rows="10" name="content"></textarea>
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
