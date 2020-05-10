<?php

session_start();

unset ($_SESSION["user"]);

session_destroy ();

setcookie("stayin", "1", time() - (86400), "/"); 

header('location: ../')

?>