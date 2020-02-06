<!DOCTYPE html>
<html lang="sr">

<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" type="image/png" href="kapsula.png">


	<script>
		window.onload = function() {
			ucitajProizvodjace();
		};

		function ucitajProizvodjace() {
			$.getJSON('servis2.php', function(data) {
				$.each(data.proizvodjaci, function(i, proizvodjac) {
					console.log(proizvodjac.nazivProizvodjaca);
					$("#proizvodjaciT tbody").append('<tr><td>' + proizvodjac.nazivProizvodjaca + '</td><td>' + proizvodjac.adresa + '</td><td>' + proizvodjac.brojIzdatihLekova + '</td></tr>');
				})
			})
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#searchA").click(function() {
				var broj = document.getElementById("poljePretragaA").value;
				$("#proizvodjaciT tr:gt(0)").remove();
				$.getJSON('servis2.php', {
					"uslov": broj
				}, function(data) {
					$.each(data.proizvodjaci, function(i, proizvodjac) {
						$("#proizvodjaciT tbody").append('<tr><td>' + proizvodjac.nazivProizvodjaca + '</td><td>' + proizvodjac.adresa + '</td><td>' + proizvodjac.brojIzdatihLekova + '</td></tr>');
					})
				})


			});
		});
	</script>
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
			<br>
			Prikaži proizvođače sa brojem izdatih lekova većim ili jednakim od:
			<input type="text" id="poljePretragaA" name="poljeZaPretraguA" required>
			<input type="submit" value="Pronađi" id="searchA">
			<br><br>
			<table id="proizvodjaciT">
				<thead>
					<tr>
						<th>Naziv proizvođača </th>
						<th>Adresa proizvođača</th>
						<th>Broj izdatih lekova</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
<br><br><br>

		</div>
		<div id="footer" ">
			<p id="tim">
			Despotović, Todorovići </p>
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