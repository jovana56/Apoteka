<!DOCTYPE html>
<html lang="sr">

<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" type="image/png" href="kapsula.png">

	<style>
		#dobrodosli {
			font-family: Comic Sans MS;
			font-size: 30px;
			top: 80px;
			left: 140px;
			position: absolute;
			background: rgba(255, 0, 0, 0.3);
		}
	</style>
</head>

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
			<?php
			$url = 'http://localhost/itehProjekat/komentari';
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POST, false);
			$curl_odgovor = curl_exec($curl);
			curl_close($curl);
			$parsiran_json = json_decode($curl_odgovor);
			?>
			<h2>Svi komentari:</h2>
			<?php
			foreach ($parsiran_json as $value) {
				$a = $value->Ime . " " . $value->Prezime . " : " . $value->Komentar;
				echo $a;
				echo "<br>";
			}
			?>
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