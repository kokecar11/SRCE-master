<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php echo PROYECTO?> </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo SERVERURLL?>vistas/css/main.css">
</head>
<body>

	<?php 
		$petiAjax=false;
		require_once "./controladores/viewsController.php";

		$vw = new viewsController();
		$viewR = $vw-> obt_views_controller();
		if($viewR == "login"||$viewR == "404"):
			if($viewR == "login"){
				require_once "./vistas/contenidos/login-view.php";
			}else{
				require_once "./vistas/contenidos/404-view.php";
			}
			
		else:	
			session_start();
	?>
	<!-- SideBar -->
		<?php include "./vistas/modulos/navlateral.php"; ?>     
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<?php include "./vistas/modulos/navbar.php"; ?>  
		<!-- Content page -->
		<?php require_once $viewR; ?>

	</section>
	<?php endif; ?>
	
	<!--====== Scripts -->
	<?php include "./vistas/modulos/script.php"; ?>
</body>
</html>