<!DOCTYPE html>
<html lang="sr">

<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>
	<script src="js/jquery.js"></script>
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
	<script>
		window.onload = function() {
			ucitajLekove();
		};

		function ucitajLekove() {
			$.getJSON('servis1.php', function(data) {
				$.each(data.lekovi, function(i, lek) {
					$("#lekT tbody").append('<tr><td>' + lek.nazivLeka + '</td><td>' + lek.godinaProizvodnje + '</td><td>' + lek.nazivProizvodjaca + ' ' + lek.adresa + '</td><td>' + lek.imeDobavljaca + ' ' + lek.adresaDobavljaca + '</td><td>' + lek.ocena + '</td></tr>');
				})
			})
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#search").click(function() {
				var ocena = document.getElementById("poljePretraga").value;
				$("#lekT tr:gt(0)").remove();
				$.getJSON('servis1.php', {
					"uslov": ocena
				}, function(data) {
					$.each(data.lekovi, function(i, lek) {
						$("#lekT tbody").append('<tr><td>' + lek.nazivLeka + '</td><td>' + lek.godinaProizvodnje + '</td><td>' + lek.nazivProizvodjaca + ' ' + lek.adresa + '</td><td>' + lek.imeDobavljaca + ' ' + lek.adresaDobavljaca + '</td><td>' + lek.ocena + '</td></tr>');
					})
				})


			});
		});
	</script>
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
			<br>
			Prikaži sve lekove sa ocenom većom ili jednakom od:
			<input type="text" id="poljePretraga" name="poljeZaPretragu" required>
			<input type="submit" value="Pronađi" id="search">
			<br><br>
			<table id="lekT">
				<thead>
					<tr>
						<th>Naziv leka</th>
						<th>Godina proizvodnje</th>
						<th>Proizvođač</th>
						<th>Dobavljač</th>
						<th>Ocena</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>

			<br><br><br>
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

</body>

</html>