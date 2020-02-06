<?php 
	session_start();
	if (isset($_SESSION['uid'])) {
		header("location:profile.php");
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
					<li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>  Početna</a></li>
					<li style="width: 300px; left: 10px;top: 10px;"><input type="text" name="" class="form-control" id="search"></li>
					<li style="top: 10px;left: 20px;"><button class="btn btn-primary" id="search_btn"> Pretraga <span class="glyphicon glyphicon-search"></span></button>
					</li>
					<li style="top: 10px;left: 30px;"><button class="btn btn-primary" id="prikazSviLekovi_btn"> Prikaz svih lekova <span class="glyphicon glyphicon-search"></span></button>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Korpa<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Redni broj</div> 
									<div class="col-md-3">Slika leka</div>
									<div class="col-md-3">Naziv leka</div>
									<div class="col-md-3">Cena u dinarima</div>								
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>

						</div>
					</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Sign in</a>
					<!-- Pod meni -->
					<ul class="dropdown-menu">
						<div style="width: 300px;">
							<div class="panel panel-primary">
								<div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> Prijavi se</div>
								<div class="panel-heading">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" required/>
									<label for="email">Šifra</label>
									<input type="text" class="form-control" id="password" required/>
									<p><br/></p>
									
									<input type="submit" class="btn btn-success" style="float:right; " id="login" value="Potvrdi">
								</div>
								<div class="panel-footer" id="e_msg">
					
								</div>
							</div>
						</div>
					</ul>
					</li>
					<li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>	

				</ul>
			</div>
		</div>
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					
					<!--proizvodjaci  -->
					<div id="get_proizvodjac">	
					<!-- Ajax -->
					</div>
					
					<!-- dobavljaci -->
					<div id="get_dobavljac">
						<!-- Ajax -->
					</div>
					
				</div>
				<!-- ***PANEL veliki -->
				<div class="col-md-8" >
					<div class="panel panel-info">
						<div class="panel-heading"><strong>Lekovi</strong></div>
						<div class="panel-body" >
						    <!--*** Panel POJEDINACNI(mali)   -->
						    <div id="get_proizvod" >
						    	
						    </div>
						    
						</div>
						<div class="panel-footer" >
							<p align="center" style="color: white;">
								<strong><span class="glyphicon glyphicon-copyright-mark"></span>   
                            		Despotović,Todorovići <?php echo date('Y'); ?>		
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
						<ul class="pagination" id="obelezavanje_strana"> <!-- mocna klasa za obelezavanje strana -->
							
												

						</ul>
					</center>
				</div>
			</div>

		</div>

	</div>



</body>
</html>