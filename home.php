<!DOCTYPE html>
<html lang="sr">

<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>

	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" type="image/png" href="kapsula.png">
	<style>
		#dobrodosli {
			font-family: Verdana;
			font-size: 30px;
			top: 10px;
			left: 215px;
			position: absolute;
			background: rgba(255, 0, 0, 0.3);
			padding: 30px;
		}

		#pronadji,
		#pravilo {

			font-family: Verdana;
			padding: 20px;
		}
	</style>

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
			<p id="dobrodosli" align="justify"><b>Dobrodošli u  e-apoteku!</p>
		</div>
		<div id="pretraga">
			<p id="pronadji" align="justify"><b> Želite da pronađete određeni lek? <a href="pretraga.php"> <br>PRETRAŽI LEK</a> <br></br>
			</p>

		</div>
		<div id="pdf">
			<p id="pravilo" align="justify"><b>Pravila korišćenja sajta:</b>
				<a href="pdfpravilnik.php" target="blank"><br> PRAVILNIK(PDF)
				</a><br><br></p>
		</div>
		<div id="footer">
			<p id="tim">
				Despotović, Todorovići</p>
			<p id="datum">
				<script>
					var datum = new Date();
					document.write(datum.getDate() + ".02." + datum.getFullYear() + ".");
				</script>
			</p>

		</div>

	</div>





</body>

</html>