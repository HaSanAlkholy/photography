<?php

include "../assets/template/header.php";

$current = "Add User";

include "../assets/template/main.php";



if (isset($_POST['submit'])) {

   
$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$query ="INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES (NULL, '$name', '$email', '$pass')";
if(mysqli_query($conn,$query)){
echo "<script type='text/javascript'> document.location = '../users/'; </script>";
    exit();
}else{
echo "<script type='text/javascript'> document.location = '../users/'; </script>";
  exit();
}
}


?>
 



<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="email" name="email">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>




 
<?php

include "../assets/template/footer.php";

?>
