<?php 
	
	include "konekcija.php";

	abstract class StavkaMenija
	{
		var $idProizvodjaca;
		var $nazivProizvodjaca;
		

		function __construct($nazivProizvodjaca){
			$this->nazivProizvodjaca = trim($nazivProizvodjaca);
			
		}

		abstract public function addToDatabase();

	}




	class Proizvodjac extends StavkaMenija
	{
		var $adresa;
		var $brojIZdatihLekova;
		
		

		function __construct($nazivProizvodjaca,$adresa,$brojIZdatihLekova)
		{
			parent::__construct($nazivProizvodjaca);
			$this->adresa = $adresa;
			$this->brojIZdatihLekova = $brojIZdatihLekova;
		
			

			
		}

		public function addToDatabase(){

						include "konekcija.php";

						$nazivProizvodjaca = $this->nazivProizvodjaca;
						$adresa = $this->adresa;
						$brojIZdatihLekova = $this->brojIZdatihLekova;
						
						

						$sql="INSERT INTO proizvodjaci (nazivProizvodjaca, adresa, brojIzdatihLekova) VALUES ('".$nazivProizvodjaca."', '".$adresa."','".$brojIZdatihLekova."')";
						if ($mysqli->query($sql)){
								return true; } 
							else {
								return false;
						}
		}
	}

	
 
 ?>