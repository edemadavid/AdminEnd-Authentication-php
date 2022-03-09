<?php 
// session_start();

// if(isset($_POST['adminjapa'])){
//     unset($_SESSION['auth']);
//     unset($_SESSION['auth_role']);
//     unset($_SESSION['auth_user']);

//     $_SESSION['message'] = 'Logged out';
//     header("Location: login .php");
// }

session_start();

session_unset();
session_destroy();

header("Location: ../../../login.php");

?>