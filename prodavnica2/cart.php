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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/styleProdavnica.css"/>
	<link rel="stylesheet" type="text/css" href="css/styleCart.css"/>


	<!-- Link za JQuery -->
	<script type="text/javascript" src="js/jquery2.js"></script>
	<!-- <script src="js/jquery.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- Link za Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>

</head>
<body>

	<div class="container">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar navbar-header">
					<a href="../home.php" class="navbar-brand"><span class="glyphicon glyphicon-book
"></span> E-apoteka</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Pocetna</a></li>
					<!-- <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li> -->
				</ul>
			</div>
		</div>
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" id="cart_msg">
					<!-- Cart Message!!! -->
				</div>
				<div class="col-md-2"></div>

			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-shopping-cart"></span> 
							<strong>Korpa provera</strong>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-2"><b>Brisanje/Izmena</b></div>
								<div class="col-md-2"><b>Lek-slika</b></div>
								<div class="col-md-2"><b>Lek-naziv</b></div>
								<div class="col-md-2"><b>Količina</b></div>
								<div class="col-md-2"><b>Cena leka</b></div>
								<div class="col-md-2"><b>Ukupna cena (din.)</b></div>							
							</div>

							<div id="cart_checkout">
								
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
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>

</body>
</html>
