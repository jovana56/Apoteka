<!DOCTYPE html>
<html lang="sr">

<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>

	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" type="image/png" href="kapsula.png">
	<script src="js/pronadjinaziv.js" type="text/javascript"></script>
	<script src="js/jszasuger.js" type="text/javascript"> </script>

	<script src="js/sugerisi.js" type="text/javascript"></script>
	

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

			<input type="text" id="txt" size="20" onkeyup="sugestija(this.value)" title="Ukucajte naziv leka  koji trazite.">
			<input type="button" id="sub" value="Detalji leka" onclick="PrikaziLek(document.getElementById('txt').value); obrisiizmeni('slikka')">

			<div id="livesearch"></div>




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