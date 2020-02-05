<!DOCTYPE html>
<html lang="sr">

<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>

	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" type="image/png" href="kapsula.png">
	<script src="js/obradiglasanje.js" type="text/javascript"></script>



<body>
	<div id="wrap">
		<div id="header">
			<img class="hederi" src="img/apoteka.jpeg">
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
			<div class="pull-right" id="anketa">
				<h3>Ocenite "Fervex", naš predlog za "Lek nedelje":</h3>
				<form>
					Odličan:
					<input type="radio" name="glas" value="0" onclick="getVote(this.value)">
					<br>
					Vrlo dobar:
					<input type="radio" name="glas" value="1" onclick="getVote(this.value)">
					<br>
					Dobar:
					<input type="radio" name="glas" value="2" onclick="getVote(this.value)">
					<br>
					Loš:
					<input type="radio" name="glas" value="3" onclick="getVote(this.value)">

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

		



</body>

</html>