<?php
    session_start();
    include "site-config/environment.php";
    $title = "Ver mensaje | YourWebsite";
	include('controladores/coreController.php');

	if(!$_SESSION["usuario_admin"]) {
		header("location:usuarioinicio.php");
	}
	$coreController = new CoreController();
	$respuesta = $coreController -> MostrarMensajes();
	$coreController -> EliminarMensaje();
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include "modulos/head.php";
    ?>

	<head>	
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
	</head>
    <body>
        <?php
            include "modulos/header.php";
        ?>
		
		<div class="container">
			<div class="row profile">
				<div class="col-md-3">
					<div class="profile-sidebar">
						<!-- SIDEBAR USERPIC -->
						<div class="profile-userpic">
							<img src="img/anuncio1.jpg" class="img-responsive" alt="">
						</div>
						<!-- END SIDEBAR USERPIC -->
						<!-- SIDEBAR USER TITLE -->
						<div class="profile-usertitle">
							<div class="profile-usertitle-name">
								Bienvenido
							</div>
							<div class="profile-usertitle-job">
								Nombre
							</div>
						</div>
						<!-- END SIDEBAR USER TITLE -->
						<!-- SIDEBAR BUTTONS -->
						<!-- END SIDEBAR BUTTONS -->
						<!-- SIDEBAR MENU -->
						<div class="profile-usermenu">
							<ul class="nav">
								<li class="active">
									<a href="adminNuevoProducto.php">
									<i class="glyphicon glyphicon-plus"></i>
									Publicar un producto </a>
								</li>
								<li>
									<a href="adminusuarios.php">
									<i class="fas fa-users-cog"></i>
									Administrar usuarios </a>
								</li>
								<li>
									<a href="admineditarinf.php" >
									<i class="fas fa-user-edit"></i>
									Editar mi información </a>
								</li>
								<li>
									<a href="logout.php">
									<i class="fas fa-sign-out-alt"></i>
									Salir </a>
								</li>
							</ul>
						</div>
						<!-- END MENU -->
					</div>
				</div>

				<div class="col-md-9">
					<div class="">
						<div class="row">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<?php
		include "modulos/footer.php";
	?>  

	<?php 
	/*
	include "Controladores/adminC.php";

	$ingreso = new AdminC();
	$ingreso -> IngresoC();
		*/
	?>

	<script>
		$( document ).ready(function() {
			$(".btn-eliminar" ).on( "click", function() {
				window.location.href = 'admininicio.php?id=' + $(this).attr('id');
			});
		});
	</script> 
</html>