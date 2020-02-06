

<html lang="sr">
<head>
	<meta charset="UTF-8">
	<title>E-apoteka</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<?php include "objekti.php"; ?>
	<link rel="icon" type="image/png" href="kapsula.png">
	<style>
	#admin{
		font-family: Verdana;
		font-size: 30px;
		color: black;
		background: rgba(255,0,0,0.3);
		padding: 20px;
		}
	</style>
</head>
<body>



	<div id="wrap">
		<div id="header">
			<p id="admin"><b>Rad sa proizvođačima</b> </p>
		</div>
		<div id="meni">	
			
			<a href="logout.php">Log out</a>
			<a href="izlistajLekove.php">Svi lekovi</a>
		</div>
		<div id="content" style="padding:20px;">
			<h1>Dodavanje proizvođača</h1>
			<div id="dodajProizvodjaca">
				<form name="addJ" action="" method="post" accept-charset="utf-8">
   				 	<ul>
       			 		<li>Naziv:
        					<input type="text" name="imeProizvodjaca" required></li>
        				<br>
        				<li>Adresa: 
							<input type="text" name="adresa" required></li>
							<br>
        				<li>Broj izdatih lekova: 
        					<input type="text" name="brojIzdatihLekova" required></li>
        				<br>
        					<input type="submit" value="Dodaj proizvođača" name="SubmitButton"></li>
    				</ul>
				</form>
				<?php if(isset($_POST['SubmitButton'])) 
						{

						$imeProizvodjaca1 = $_POST["imeProizvodjaca"];
						
						$adresa1 = $_POST["adresa"];
						$brojIzdatihLekova1 = $_POST["brojIzdatihLekova"];
						

						$novoProizvodjac = new Proizvodjac($imeProizvodjaca1,$adresa1,$brojIzdatihLekova1);
						
						if ($novoProizvodjac->addToDatabase()) {
							echo "<script>alert('Proizvođač je uspešno ubačen!')</script>";
						} else {
							echo "<script>alert('Proizvođač nije ubačen!')</script>";
						}
						}
				?>

			</div>
			
			<h1>Brisanje proizvođača</h1>
			<div id="obrisiProizvodjaca">
				<?php
					include "konekcija.php";
					$sql="SELECT * FROM proizvodjaci";
					$rezultat = $mysqli->query($sql);
				?>
				<form method="post"> 
					<b>Izaberi proizvođača za brisanje:</b>
					<select name="proizvodjaciKombo">
				<?php
					while($red = $rezultat->fetch_object()){
				?>
					<option value="<?php echo $red->idProizvodjaca;?>"><?php echo $red->nazivProizvodjaca?></option>
				<?php
					}
				?>
					</select>
					<input type="submit" value="Obriši proizvođača" name="ObrisiProizvodjaca">
				</form>
				<?php if(isset($_POST['ObrisiProizvodjaca'])) 
						{
					   	include "konekcija.php";
					   	if (!isset ($_POST["proizvodjaciKombo"])){
							echo "Parametar ID nije prosleđen!"; // nista nije slektovao u kombu !!!
						} else {
							$id=$_POST["proizvodjaciKombo"];
							$sql="DELETE FROM proizvodjaci WHERE idProizvodjaca = ".$id;
							if ($mysqli->query($sql)){
									echo "<script>alert('Proizvođač je uspešno izbrisan!')</script>";
									header("Refresh:0");
							} else {
								$greska = $mysqli->error;
								?>
							"<script>alert(<?php echo $greska; ?>)</script>" <?php 

								}
							}
						}
				?>
			</div>
			
			<br>
			<h1>Izmena proizvođača</h1>
			<div id="Izmeni proizvodjaca">
				<?php
					include "konekcija.php";
					$sql="SELECT * FROM proizvodjaci";
					$rezultat = $mysqli->query($sql);
				?>
				<form method="post">
					<b>Izaberi proizvođača za ažuriranje:</b>
					<select name="proizvodjaciAzuriranje">
						<br>
				<?php
					while($red = $rezultat->fetch_object()){
				?>
					<option value="<?php echo $red->idProizvodjaca;?>"><?php echo $red->nazivProizvodjaca;?></option>
				<?php
					}
				?>
					</select><br><br>
					<b>Izaberite atribut za ažuriranje:</b>
					<select name="atributiProizvodjaca">
						<option value="nazivProizvodjaca">Naziv</option>
						
						<option value="adresa">Adresa</option>
						<option value="brojIzdatihLekova">Broj izdatih lekova</option>
						
					</select><br> <br>
					<b>Unesite novu vrednost:</b>
					<input type="text" name="izmena">
					<input type="submit" value="Ažuriraj" name="Azuriraj">
				</form>
				<?php if(isset($_POST['Azuriraj'])) 
						{
					   	include "konekcija.php";
					   	if (!isset ($_POST["proizvodjaciAzuriranje"]) || !isset ($_POST["atributiProizvodjaca"])){
							echo "Parametar ID nije prosleđen!";
						} else {
							$proizvodjacA=$_POST["proizvodjaciAzuriranje"];
							$atributA=$_POST["atributiProizvodjaca"];
							$vrednostA=$_POST["izmena"];
							$sql="UPDATE proizvodjaci SET ".$atributA."='".$vrednostA."' WHERE idProizvodjaca = ".$proizvodjacA;
							if($mysqli->query($sql)){
									echo"<script>alert('Proizvodjac je azuriran!')</script>";
							}else {
								$greska = $mysqli->error;
								?>
							<script>alert(<?php echo $greska; ?>)</script> <?php 

								}
							}
						}
				?>
			</div>
			
			
		
		

	
</body>
</html>