<!DOCTYPE html>
<html lang="sr">

<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" type="image/png" href="kapsula.png">

	<style>
	

		#content {

			padding-left: 50px;
			padding-bottom: 50px;
			
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#email").blur(function() {
				proveriEmail();
			});
		})

		function proveriEmail() {
			var check = document.getElementById("email").value;
			$.post("eksterniServis.php", {
					check: check
				},
				function(data) {
					if (data == "BAD") {
						alert("Uneli ste los e-mail!");
						document.getElementById("email").value = "";
					}
				});

		}
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

			<form method="GET" action="">
				<br>
				Ime:<br>
				<input type="text" name="ime" required>
				<br><br>
				Prezime:<br>
				<input type="text" name="prezime" required>
				<br><br>
				E-mail:<br>
				<input type="text" id="email" name="email" required>
				<br><br>
				Komentar:<br>
				<textarea rows="4" cols="50" name="kom" required>

				</textarea>  <br><br>
				<input type="submit" value="Pošalji" style="margin-left:150px; height: 30px; width: 100px">
			</form>
			
			<?php
			if (isset($_GET['ime']) && isset($_GET['prezime']) && isset($_GET['email']) && isset($_GET['kom'])) {
				$url = 'http://localhost/itehProjekat/komentar';
				$curl = curl_init($url);
				$ime = $_GET['ime'];
				$prezime = $_GET['prezime'];
				$email = $_GET['email'];
				$kom = $_GET['kom'];

				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
				curl_setopt($curl, CURLOPT_POST, true);

				$arr = array('Ime' => $ime, 'Prezime' => $prezime, 'Email' => $email, 'Komentar' => $kom);

				curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($arr));

				$curl_odgovor = curl_exec($curl);





				$json_objekat = json_decode($curl_odgovor);



				curl_close($curl);
			?>
				<div id="odgServisa">
					<p><?php echo $json_objekat->poruka; ?></p>
				</div>
			<?php
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