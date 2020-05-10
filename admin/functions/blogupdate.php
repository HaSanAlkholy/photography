<?php

include "../assets/template/header.php";

$current = "Update";

include "../assets/template/main.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

  $query = "SELECT * FROM `blogs` WHERE `id` = $id"; 

$res = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($res);


}else{
echo "<script type='text/javascript'> document.location = '../blog/'; </script>";
}

if (isset($_POST['submit'])) {

   
$title = $_POST['title'];
$content=$_POST['content'];
$pic=$_FILES['pic'];
$picName = $pic['name'];
if(move_uploaded_file($pic['tmp_name'], "../../img/".$picName)){
$query ="UPDATE `blogs` SET `pic` = '$picName', `title` = '$title', `content` = '$content' WHERE `blogs`.`id` = $id";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../blog/'; </script>";
}

}else{
    $query ="UPDATE `blogs` SET  `title` = '$title', `content` = '$content' WHERE `blogs`.`id` = $id";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../blog/'; </script>";
}
}

}

?>
 



<form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" value="<?php echo $row['title']; ?>" name="title">
  </div>
  
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content" rows="10" name="content"><?php echo $row['content']; ?></textarea>
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
