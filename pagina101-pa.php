<?php
	$acao = 'recuperar';
	require 'registro_controller.php';
	/*
	echo '<pre>';
	print_r($registros);
	echo '</pre>';
	*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Sistema web - Registro da PA</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<!-- Font Awesome CSS -->
	<script src="https://kit.fontawesome.com/a003e7e3bf.js" crossorigin="anonymous"></script>

	<!-- Estilos customizados -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" href="css/dark-mode.css">

	<!-- jQuery Snippet 3.x -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

	<!-- Estilos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
	<!-- JS -->
	<script src="src/js/dark-mode.js"></script>
</head>

<body>
	<header><!-- Início cabecalho -->

		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #011804;">
			<div class="container">
				<a href="index.php" class="navbar-brand filtro">
					<img src="img\logo.png" class="mr-2">UBS
				</a>

				<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
					<i class="fa-solid fa-bars"></i>
				</button>

				<div class="collapse navbar-collapse" id="nav-principal">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link filtro" href=""><img src="img\sus.png" class="mr-2">SUS - Sistema Único
								de Saúde</a>
						</li>
						<li class="nav-item">
							<a class="nav-link filtro" href=""><img src="img\govsp.png" class="mr-2">Secretaria da
								Saúde - SP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link filtro" href=""><img src="img\munsp.png" class="mr-2">Saúde - São
								Paulo</a>
						</li>
					</ul>
				</div>
			</div>

		</nav>	
			
	</header><!--/ Fim cabecalho -->

	<section><!-- Início seção1 -->
		<div class="container pt-3 mb-2" style="margin-top: 130px;"><!-- Início container1 -->
			<div class="row"><!-- Iníco da row-->
				<div class="col-md-8"><!---->
					<h1 class="text-capitalize" style="padding-top: 100px;"></h1>
				</div><!---->

				<!-- Início menu-->
				<div class="col-md-4 mt-2 row align-self-start justify-content-end">
					<div class="dropdown"><!-- Início dropdown -->
						<a class="btn text-dark dropdown-toggle" href="" data-toggle="dropdown">Olá, <span
								class="font-weight-bold">Usuário</span></a>
						<div class="dropdown-menu">
							<a class="btn text-dark dropdown-item" href="pagina3.php"><i
									class="fa-regular fa-calendar-days pr-2"></i>Home</a>
							<a class="btn text-dark dropdown-item" href="index.php"><i
									class="fa-solid fa-right-from-bracket pr-2"></i>Sair</a>
						</div>
					</div><!--/ Fim dropdown -->
				</div><!--/ Fim menu -->
			</div><!--/ Fim da row -->
		</div><!--/ Fim container1 -->
	</section><!--/ Fim seção1 -->

	<!-- Início do menu lateral -->
	<div class="nav-side-menu">

		<div class="brand">
			<i class="fa-solid fa-heart-pulse pr-4"></i>Pressão Arterial
		</div>

		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

		<div class="menu-list">

			<ul id="menu-content" class="menu-content collapse out">

				<li>
					<a href="pagina100-pa.php"><i class="fa-solid fa-user-doctor pr-5"></i>Registro da PA</a>
				</li>

				<li data-toggle="collapse" data-target="#dados" class="collapsed">
					<a href="#"><i class="fa-solid fa-laptop-code pr-5"></i>Dados da PA <span class="arrow"><i
								class="fa fa-angle-down"></i></span></a>
				</li>
				<ul class="sub-menu collapse" id="dados">
					<li><a href="pagina101-pa.php"><i class="fa fa-angle-right"></i> Histórico da PA <small><i
									class="fa fa-external-link"></i></small></a>
					</li>
					<li><a href="pagina102-pa.php"><i class="fa fa-angle-right"></i> Análise da PA <small><i
									class="fa fa-external-link"></i></small></a></li>
				</ul>
			</ul>
		</div>
	</div>
	<!--/ Fim do menu lateral -->

	<!-- Início do Histórico da PA -->
	<div class="main" id="pagina">

		<div class="container"><!-- Início do Container -->
			<div class="row">
				<div class="col">
					<label class="col-sm-9 col-form-label">Histórico da PA:</label>
					<hr />
					
					<div class="col-md-12 mt-4"><!-- Início da tabela -->

						<table class="table table-striped table-bordered">
							
							<thead>
								<tr>
									<th>Data / Hora</th>
									<th>Sístole ("Pressão Alta") [mmHg]</th>
									<th>Diástole ("Pressão Baixa") [mmHg]</th>
									<th>Responsável</th>
									<th></th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($registros as $indices => $registro) {?>
									<tr> <!-- Início do registro da PA -->
										<td><?= $registro->data_cadastrado ?> hs</td>
										<td><?= $registro->sistole ?></td>
										<td><?= $registro->diastole ?> </td>
										<td><?= $registro->responsavel ?></td>
										<td>
											<div class="col-sm-3 mt-2 d-flex justify-content-between">
												<span class="cursor-pointer"><i
													class="fas fa-trash-alt fa-lg text-danger"></i></span>
											</div>
										</td>
									</tr> <!-- Fim do registro da PA -->
								<?php } ?>
							</tbody>
						</table>					

						<!-- Início da paginação -->
						<nav>
							<ul class="pagination">
								<li class="page-item">
									<a href="" class="page-link text-dark">Anterior</a>
								</li>
								<li class="page-item active">
									<a href="" class="page-link">1</a>
								</li>
								<li class="page-item">
									<a href="" class="page-link text-dark">2</a>
								</li>

								<li class="page-item">
									<a href="" class="page-link text-dark">3</a>
								</li>

								<li class="page-item">
									<a href="" class="page-link text-dark">Próximo</a>
								</li>
							</ul>
						</nav>
						<!--/ Fim da paginação -->
						
					</div><!--/ Fim da tabela -->

				</div>
			</div>
		</div><!--/ Fim do Container -->
		<!--/ Fim do Histórico da PA -->

		<!-- JavaScript (Opcional) -->
		<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
			integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
			crossorigin="anonymous"></script>
</body>

</html>