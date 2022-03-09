<?php 
//  include 'partial/header.php';
 if(!isset($_SESSION)) { 
		session_start(); 
	} 
 if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) { 

?> 
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			

			<link rel="stylesheet" href="admin/adminPublic/css/bootstrap.css">
			<link rel="stylesheet" href="admin/adminPublic/css/bootstrap-icons/bootstrap-icons.css">

			<!-- Custom CSS -->
			<link rel="stylesheet" href="admin/adminPublic/css/style.css">


			<title>Admin Dashboard</title>
		</head>
		<body class="toggle-sidebar">
		
			<main id="main" class="main">
				<div class="d-flex justify-content-center align-items-center" >
					<form class="p-5 rounded-3 shadow" 
						action="admin/adminPublic/auth/login.php"
						method="post" 
						style="width: 30rem">
						<h1 class="text-center pb-5 display-4">Login to Admin</h1>
						<?php if (isset($_GET['error'])) { ?>
						<div class="alert alert-danger" role="alert">
						<?=htmlspecialchars($_GET['error'])?>
						</div>
						<?php } ?>

						<div class="mb-3">
							<label for="exampleInputEmail1" 
								class="form-label">Email address
							</label>
							<input type="email" 
								name="email" 
								value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" 
								class="form-control" 
								id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" 
								class="form-label">Password
							</label>
							<input type="password" 
								class="form-control" 
								name="password" 
								id="exampleInputPassword1">
						</div>
						<button type="submit" 
								class="btn btn-primary">LOGIN
						</button>
					</form>
				</div>
			</main>


			<footer id="footer" class="footer">
				<div class="copyright">
				&copy; Copyright <strong><span>Edema David Ovie</span></strong>. All Rights Reserved
				</div>

				<div class="copyright">
				Designed by <a href="https://Walexbiznig.com/">Walex Biz Nig</a>
				</div>
			</footer><!-- End Footer -->

			<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
			<script src="admin/adminPublic/js/bootstrap.js"></script>
			<script src="admin/adminPublic/js/main.js"></script>



		</body>
	</html>
<?php 
}else {
    header("Location: admin/index.php");
}
