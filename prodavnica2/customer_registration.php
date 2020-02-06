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
					<a href="../home.php" class="navbar-brand"><span class="glyphicon glyphicon-plus
"></span> E-apoteka</a>
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>  Početna</a>
					</li>
				</ul>
			</div>
		</div>
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div class="container-fluid">
			<div class="row">
				<div  id="signup_msg" class="col-md-12">
					<!-- Ajax -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="panel panel-primary">
						<div class="panel-heading">Forma za prijavu</div>
						<div class="panel-body">

						<form method="post">
							<div class="row">
								<div class="col-md-6">
									<label for="f_name">Ime:</label>
									<input type="text"  name="f_name" id="f_name" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="l_name">Prezime:</label>
									<input type="text" name="l_name" id="l_name" class="form-control">					
								</div>								
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="e_name">E-mail:</label>
									<input type="text"  name="email" id="email" class="form-control">
								</div>												
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="password">Šifra:</label>
									<input type="text"  name="password" id="password" class="form-control">
								</div>												
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="repassword">Ponovo unesite šifru:</label>
									<input type="text"  name="repassword" id="repassword" class="form-control">
								</div>												
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="mobile">Broj mobilnog telefona:</label>
									<input type="text"  name="mobile" id="mobile" class="form-control">
								</div>												
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="address1">Adresa:</label>
									<input type="text"  name="address1" id="address1" class="form-control">
								</div>												
							</div>

							<p><br/></p>

							<div class="row">
								<div class="col-md-12">
									<input value="Prijava" style="float: right;" type="button" id="signup_button" name="signup_button" class="btn btn-success btn-lg">
								</div>
							</div>
						</div>
					</form>
						<div class="panel-footer">
							<strong><span class="glyphicon glyphicon-copyright-mark"></span>
                            	 Despotović, Todorovići <?php echo date('Y'); ?>
                            </strong>
                        </div>						
					</div>
				</div>
				<div class="col-md-1"></div>

			</div>
		</div>
	</div>

	
</body>
</html>