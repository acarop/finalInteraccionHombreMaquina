
<?php
    session_start();
    include "site-config/environment.php";
    $title = "Inicio Admin | YourWebsite";
	include('controladores/coreController.php');
	if(isset($_SESSION["usuario_admin"]) && !$_SESSION["usuario_admin"]) {
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
							<div class="col-md-3">
								<h2>Mensajes</h2>
							</div>
							<div class="col-md-9" style="text-align: right;">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
								   <span class="glyphicon glyphicon-refresh"></span>   
								</button>
								<!-- Single button -->
								<div class="btn-group">
									<button type="button" class="btn btn-default">Eliminar todos</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Mark all as read</a></li>
										<li class="divider"></li>
										<li class="text-center"><small class="text-muted">Select messages to see more actions</small></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">	
								<div class="list-group" style="width:100%;">
									<?php
										foreach ($respuesta as $key => $value){
									?>
										<a href="#" class="list-group-item" style="margin-bottom: 5px;">
											<span class="name" style="margin-right: 2px;">
												<?php echo $value['email']; ?>
											</span> 
											<span class="text-muted" style="font-size: 11px; margin-right: 15px;">
												<?php echo $value['nombre']; ?>
											</span> 
											<span class="">
												<?php echo $value['mensaje']; ?>
											</span>
											<span class="pull-right">
												<button class="btn btn-sm btn-danger btn-eliminar" id=<?php echo $value['id'] ?>>
													eliminar
												</button>
											</span>
										</a>
									<?php
										}
									?>
								</div>
							</div>
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