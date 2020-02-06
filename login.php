<!DOCTYPE html>
<?php session_start(); ?>
<html lang="sr">

<head>
	<meta charset="utf-8">
	<title>E-apoteka</title>
	<link rel="icon" type="image/png" href="kapsula.png">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<script src="js/jquery.validate.js"></script>
	<?php require "konekcija.php"; ?>
	<style type="text/css">
		.loginform {

			font-family: Verdana;
			font-size: 24px;
			top: 80px;
			left: 200px;
			position: absolute;
			background: rgba(255, 0, 0, 0.3);
		}
	</style>
</head>

<body>
	<div id="wrap">
		<div id="header">
			<img class="hederi" src="pozadina2.jpg">
		</div>
		<div id="meni">
			<ul>
				<li><a href="home.php">Početna</a></li>
				<li><a href="lekovi.php">Lekovi</a></li>
				<li><a href="proizvodjaci.php">Proizvođači</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
				<li><a href="komentari.php">Komentari</a></li>
				<li><a href="lokacija.php">Lokacija</a></li>
				<li><a href="glasanje.php">Glas za lek nedelje</a></li>
				<li><a href="prodavnica2/index.php">E-prodavnica</a></li>
				<li><a href="login.php">Log in</a></li>

			</ul>
		</div>
		<div id="content">
			<section class="loginform" style="padding:30px;">
				<form name="login" action="" method="post" accept-charset="utf-8">

					Username:
					<input type="text" id="username" required> <br>
					Password:
					<input type="password" id="password"> <br>

					<input type="submit" value="LOGIN" style="width: 150px; height: 30px; margin-top: 20px; margin-left: 80px;" onclick="formaDugme()"></li>

				</form>
			</section>
			</form>
		</div>
		<div id="footer">
			<p id="tim">
				Despotović, Todorovići</p>
			<p id="datum">
				<script>
					var datum = new Date();
					document.write(datum.getDate() + ".2." + datum.getFullYear() + ".");
				</script>
			</p>
		</div>
	</div>
	<script>
		function formaDugme() {
			var user = document.getElementById('username').value;
			var pass = document.getElementById('password').value;
			if (user == "root" && pass == "root") {
				alert("Uspešno ste se ulogovali.");
				window.open("adminPanel.php");
			} else {
				alert("Pogrešan username/password.");
			}

		}
	</script>
	<script>
		$('#formica').validate(); // car je misa
	</script>


</body>

</html>