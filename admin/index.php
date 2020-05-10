<?php

 session_start();

require ("functions/connect.php");


if(isset($_COOKIE['stayin'])) {
    header('location:index/');
} 
if(isset($_SESSION['user'])) {
    header('location:index/');
}


$error = "";

if (isset($_POST['login'])) {
   $email=$_POST['email'];

   $pass=md5($_POST['pass']);

$query = "SELECT * FROM `users` WHERE `email`='$email' AND `pass`='$pass'";

$res = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($res);
if (!$row == "") {

    // cookie

    if (isset($_POST['check'])) {
        setcookie("stayin", "1", time() + (86400), "/"); 
       }

// session

    $_SESSION['user']=1;


    header('location:index/');

}else{

    $error = "Your email or password was wrong";

}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="assets/css/login.css" rel="stylesheet">
    <title>Login</title>
</head>
<body >
   

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">

<?php if (!$error == "") : ?>
  <div class="alert alert-danger mb-3" role="alert">
  <?php echo $error ?>
</div>
<?php endif; ?>

			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Email" name="email" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="pass" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" name="check">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="login">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center">
				</div>
			</div>
		</div>
	</div>


</body>
</html>