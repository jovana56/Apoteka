<?php
session_start();
if (!isset($_SESSION['uid'])) {
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>E-apoteka</title>
	<meta charset="utf-8">

	<!-- Favikon -->
	<link rel="icon" type="image/png" href="productImages/kapsula.png">

	<!-- Link za CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/styleProdavnica.css" />

	<!-- Link za JQuery -->
	<script type="text/javascript" src="js/jquery2.js"></script>
	<!-- Link za Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>

</head>

<body>

	<div class="container">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar navbar-header">
					<a href="../home.php" class="navbar-brand"><span class="glyphicon glyphicon-plus
"></span> E-apoteka</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>  Početna</a></li>
					<li style="width: 300px; left: 10px;top: 10px;"><input type="text" name="" class="form-control" id="search"></li>
					<li style="top: 10px;left: 20px;"><button class="btn btn-primary" id="search_btn"> Pretraga <span class="glyphicon glyphicon-search"></span></button>
					<li style="top: 10px;left: 30px;"><button class="btn btn-primary" id="prikazSviLekovi_btn"> Prikaz svih lekova <span class="glyphicon glyphicon-search"></span></button>
					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<!-- *** id=cart_container -->
					<li>
						<a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Korpa <span class="badge">
								<!-- 0 --></span></a>
						<div class="dropdown-menu" style="width: 400px; color: black;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3" style="color: black;">Redni broj</div> <!-- Serial number-->
										<div class="col-md-3" style="color: black;">Slika leka</div>
										<div class="col-md-3" style="color: black;">Naziv leka</div>
										<div class="col-md-3" style="color: black;">Cena</div>
									</div>
								</div>
								<!-- ***Ovde podaci cart_product-->
								<div class="panel-body">
									<div id="cart_product" >

									</div>

								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo " ." .  $_SESSION['name']; ?></a>
						<!-- Pod meni -->
						<ul class="dropdown-menu">
							<li><a href="cart.php" style="text-decoration: none; color: #337AB7;"><span class="glyphicon glyphicon-shopping-cart"></span> Korpa</a></li>
							<li class="divider"></li>

							<li><a href="logout.php" style="text-decoration: none; color: #ac2925;">Log out</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">


					<div id="get_proizvodjac">

					</div>

					<div id="get_dobavljac">

					</div>

				</div>
				<!-- ***PANEL veliki -->
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12" id=product_msg>
							<!-- ajax -->
						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading"><strong>Lekovi</strong></div>
						<div class="panel-body">
							<!--*** Panel POJEDINACNI(mali)   -->
							<div id="get_proizvod">
								<!-- ajax -->
							</div>

						</div>
						<div class="panel-footer">
							<p align="center" style="color: white;">
								<strong><span class="glyphicon glyphicon-copyright-mark"></span>
									Despotović, Todorovići <?php echo date('Y'); ?>
								</strong>
							</p>

						</div>

					</div>
				</div>
				<div class="col-md-1"></div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<center>
						<ul class="pagination" id="obelezavanje_strana">
							<!-- mocna klasa za obelezavanje strana -->

							<!-- <li><a href="#">1</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">1</a></li> -->

						</ul>
					</center>
				</div>
			</div>
		</div>

		
	</div>



</body>

</html>