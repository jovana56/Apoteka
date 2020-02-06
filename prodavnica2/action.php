<?php 	
	include "db.php"; 
	session_start();
?>
<?php 

// **za proizvodjace
if (isset($_POST["proizvodjac"])) {
	$proizvodjaci_query="SELECT * FROM proizvodjaci";
	$run_query=mysqli_query($con,$proizvodjaci_query);
			
	?>
		<div class="nav nav-pills nav-stacked">
			<li class="active"><a href="#"><h4>Proizvođači</h4></a></li>
	<?php
	if (mysqli_num_rows($run_query)>0) {
		while ($row=mysqli_fetch_array($run_query)) {
			$proizvodjac_id=$row["proizvodjac_id"];
			$proizvodjac_naziv=$row["proizvodjac_naziv"];
			
			?>
				<li><a href="#" class="proizvodjac" aid="<?php echo "$proizvodjac_id"; ?>"><?php echo "$proizvodjac_naziv"; ?></a></li>
			<?php
		}
		
		?>
			</div>
		<?php
	}
}
	

// **za dobavljace
if (isset($_POST["dobavljac"])) {
	$dobavljaci_query="SELECT * FROM dobavljaci";
	$run_query=mysqli_query($con,$dobavljaci_query);
			
	?>
		<div class="nav nav-pills nav-stacked">
			<li class="active"><a href="#"><h4>Dobavljači</h4></a></li>
	<?php
	if (mysqli_num_rows($run_query)>0) {
		while ($row=mysqli_fetch_array($run_query)) {
			$dobavljac_id=$row["dobavljac_id"];
			$dobavljac_naziv=$row["dobavljac_naziv"];
			
			?>
				<li><a href="#" class="selectdobavljac" iid="<?php echo "$dobavljac_id"; ?>"><?php echo "$dobavljac_naziv"; ?></a></li>
			<?php
		}
		
		?>
			</div>
		<?php
	}
}

// za broj strana
if (isset($_POST['str'])) {
	$sql="SELECT * FROM lekovi";
	$run_query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run_query);
	// echo "$count"; //broj svih lek u bazi tipa sad je 21
	$broj_strana=ceil($count/9);//koliko strana ima sajt jer smo Limitirali na duzinu 9 (pa je ukupan br) proizvoda na jednoj strani
	// echo "$br_strana";

	for ($i=1; $i <=$broj_strana ; $i++) { 
		// ***!!!ovde dajem ID
		?>
			<li><a href="#" strana='<?php echo "$i"; ?>' id="strana"><?php echo "$i"; ?></a></li> 

		<?php

	}
}

// **za proizvode ***glavni za sve
if (isset($_POST["getProizvod"])) {
	$limit=9;
	// prvo proverimo da li su postavljeni brojevi strana
	if (isset($_POST['setStrana'])) {
		$broj_strane=$_POST['stranaBroj'];
		$start=($broj_strane *$limit)-$limit;		
	}else{
		$start=1;
	}

	$proizvodi_query="SELECT * FROM lekovi LIMIT $start,$limit "; //prvi broj od kog elementa a drugi duzinu!!!
	$run_query=mysqli_query($con,$proizvodi_query);
	
	if (mysqli_num_rows($run_query)>0) {
		while ($row=mysqli_fetch_array($run_query)) {
			$lek_id=$row['lek_id'];
			$lek_proizvodjac=$row['lek_proizvodjac'];
			$lek_naziv=$row['lek_naziv'];
			$lek_cena=$row['lek_cena'];
			$lek_opis=$row['lek_opis'];
			$lek_image=$row['lek_image'];
			$lek_tag=$row['lek_tag'];
			?>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading"><?php echo "$lek_naziv"; ?></div>
						<div class="panel-body">
							<img src='productImages/<?php echo "$lek_image";  ?>'; style="width: 150px; height: 200px; " />
						</div>
						<div class="panel-heading"> <?php echo "$lek_cena"; ?>.00 din.<button kid="<?php echo "$lek_id"; ?>"  id="lek" class="btn btn-danger btn-xs" style="float:right;">Dodaj u korpu</button>
						</div>
					</div>
				</div>
			<?php
		}		
	}
}

if (isset($_POST["get_selected_proizvodjac"])) {
	$aid=$_POST["proizvodjac_id"];
	$sql="SELECT * FROM lekovi WHERE lek_proizvodjac='$aid'";
	$run_query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($run_query)) {
			$lek_id=$row['lek_id'];
			$lek_proizvodjac=$row['lek_proizvodjac'];
			$lek_naziv=$row['lek_naziv'];
			$lek_cena=$row['lek_cena'];
			$lek_opis=$row['lek_opis'];
			$lek_image=$row['lek_image'];
			$lek_tag=$row['lek_tag'];
			?>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading"><?php echo "$lek_naziv"; ?></div>
						<div class="panel-body">
							<img src='productImages/<?php echo "$lek_image";  ?>'; style="width: 150px; height: 165px; "/ >
						</div>
						<div class="panel-heading"><?php echo "$lek_cena"; ?>.00 din.<button kid="<?php echo "$lek_id"; ?>" class="btn btn-danger btn-xs" style="float:right;" id="lek">Dodaj U Korpu</button>
						</div>

					</div>
				</div>
			<?php
	}

}

if (isset($_POST["selectdobavljac"])) {
	$iid=$_POST["dobavljac_id"];
	$sql="SELECT * FROM lekovi WHERE lek_dobavljac='$iid'";
	$run_query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($run_query)) {
			$lek_id=$row['lek_id'];
			$lek_proizvodjac=$row['lek_proizvodjac'];
			$lek_naziv=$row['lek_naziv'];
			$lek_cena=$row['lek_cena'];
			$lek_opis=$row['lek_opis'];
			$lek_image=$row['lek_image'];
			$lek_tag=$row['lek_tag'];
			?>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading"><?php echo "$lek_naziv"; ?></div>
						<div class="panel-body">
							<img src='productImages/<?php echo "$lek_image";  ?>'; style="width: 150px; height: 165px;"/ >
						</div>
						<div class="panel-heading"><?php echo "$lek_cena"; ?>.00 din.<button kid="<?php echo "$lek_id"; ?>" class="btn btn-danger btn-xs" style="float:right;" id="lek">Dodaj u korpu</button>
						</div>

					</div>
				</div>
			<?php
	}

}

if (isset($_POST["search"])) {
	$tag=$_POST["tag"];
	$sql="SELECT * FROM lekovi WHERE lek_tag LIKE '%$tag%' ";
	$run_query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($run_query)) {
			// $pro_id=$row['product_id'];
			$lek_id=$row['lek_id'];
			$lek_proizvodjac=$row['lek_proizvodjac'];
			$lek_naziv=$row['lek_naziv'];
			$lek_cena=$row['lek_cena'];
			$lek_opis=$row['lek_opis'];
			$lek_image=$row['lek_image'];
			$lek_tag=$row['lek_tag'];
			?>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading"><?php echo "$lek_naziv"; ?></div>
						<div class="panel-body">
							<img src='productImages/<?php echo "$lek_image";  ?>'; style="width: 150px; height: 165px;"/ >
						</div>
						<div class="panel-heading"><?php echo "$lek_cena"; ?>.00 din.<button kid="<?php echo "$lek_id"; ?>" class="btn btn-danger btn-xs" style="float:right;">Dodaj u korpu</button>
						</div>

					</div>
				</div>
			<?php
	}
}

//***123
if (isset($_POST['dodavanjelekovi'])) {
	// echo "123";
	$lek_id=$_POST['lekId'];
	$user_id=$_SESSION['uid'];
	// echo "$p_id";
	// echo "$user_id";
	$sql="SELECT * FROM korpa WHERE lek_id='$lek_id' AND user_id='$user_id' ";
	$run_query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run_query);
	if ($count>0) {
		
		?>
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Lek je vec ubacen u korpu! Nastavite kupovinu.</b>

			</div>
		<?php
	}else{
		// echo "456";
		$sql1="SELECT * FROM lekovi WHERE lek_id='$lek_id' ";
		$run_query1=mysqli_query($con,$sql1);
		$row=mysqli_fetch_array($run_query1);
			// echo "789";
			$lek_id1=$row['lek_id'];
			$lek_proizvodjac=$row['lek_proizvodjac'];
			$lek_naziv=$row['lek_naziv'];
			$lek_cena=$row['lek_cena'];
			$lek_opis=$row['lek_opis'];
			$lek_image=$row['lek_image'];
			$lek_tag=$row['lek_tag'];
			
			$sql2 = "INSERT INTO `korpa` (`id_`, `lek_id`, `ip_add`, `user_id`, `lek_naziv`, `lek_image`, `qty`, `cena`, `ukupan_iznos`) VALUES (NULL, '$lek_id1', '0', '$user_id', '$lek_naziv', '$lek_image', '1', '$lek_cena', '$lek_cena');";
		$run_query2 = mysqli_query($con,$sql2);
		if ($run_query2) {
			// echo "izvrsen insert";
			?>
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Lek je uspešno dodat u korpu.</b>
				</div>
			<?php
		}
	}

}

// za profile.php u navigaciji za mnozenje Kolicina*Cena
if (isset($_POST['get_cart_product'])) {

	$uid=$_SESSION['uid'];
	$sql="SELECT * FROM korpa WHERE user_id='$uid' ";
	$run_query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run_query);
	if ($count>0) {
		$no=1;
		$total_amt=0;
		while ($row=mysqli_fetch_array($run_query)) {
			$id=$row['id_'];
			$pro_id=$row['lek_id'];
			$pro_title=$row['lek_naziv'];
			$pro_image=$row['lek_image'];
			$pro_price=$row['cena'];			 
			$qty=$row['qty'];
			$total=$row['ukupan_iznos'];
			$price_array = array($total);
			$total_sum = array_sum($price_array);
			$total_amt = $total_amt + $total_sum;

			?>
				<div class="row">
					<div class="col-md-3"><?php echo "$no"; ?></div> <!-- Sl.no -->
					<div class="col-md-3"><img src='productImages/<?php echo "$pro_image";  ?>'; style="width: 60px;height: 60px; "/ ></div><!-- Product Image -->
					<div class="col-md-3"><?php echo "$pro_title"; ?></div><!-- Product Name -->
					<div class="col-md-3"><?php echo "$pro_price"; ?>.00 din.</div><!-- Price in din. -->
				</div>
				
			<?php
			$no=$no+1;
		}
		?>
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<b>Ukupno: <?php echo "$total_amt"; ?></b>
				</div>
			</div>
		<?php
	}
}

// ***Za brojanje proizvoda u korpi u profile.php
if (isset($_POST['cart_count'])) {
	if (isset($_SESSION['uid'])) {
		$uid=$_SESSION['uid'];
		$sql="SELECT * FROM korpa WHERE user_id='$uid'";
		$run_query=mysqli_query($con,$sql);
		$count=mysqli_num_rows($run_query);
		echo "$count";
	}
	

}

//za checkout u cart.php za Qunantity,Price,Total
if (isset($_POST['cart_checkout'])) {
	$uid=$_SESSION['uid'];
	$sql="SELECT * FROM korpa WHERE user_id='$uid' ";
	$run_query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run_query);
	if ($count>0) {
		$no=1;
		$total_amt=0;
		while ($row=mysqli_fetch_array($run_query)) {
			$id=$row['id_'];
			$pro_id=$row['lek_id'];
			$pro_title=$row['lek_naziv'];
			$pro_image=$row['lek_image'];
			$pro_price=$row['cena'];			 
			$qty=$row['qty'];
			$total=$row['ukupan_iznos'];
			$price_array = array($total);
			$total_sum = array_sum($price_array);
			$total_amt = $total_amt + $total_sum;
			 			
			?>

				<div class="row">
					<div class="col-md-2">
						<div class="btn-group">
							<a href="#" remove_id='<?php echo "$pro_id"; ?>' order_id='<?php echo "$id"; ?>' class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
							<a href="#" update_id='<?php echo "$pro_id"; ?>' class="btn btn-primary update"><span class="glyphicon glyphicon-ok-sign"></span></a>
						</div>
					</div>
					<div class="col-md-2">
					    <img src='productImages/<?php echo "$pro_image"; ?>' style="width: 65px; height: 65px;">
					</div>
					<div class="col-md-2" style="color:black"><?php echo "$pro_title"; ?></div> 					
					<div class="col-md-2"><input type="text" style="color:black" class='form-control qty' pid='<?php echo "$pro_id"; ?>' id="qty-<?php echo "$pro_id"; ?>" value='<?php echo "$qty"; ?>' ></div><!-- ***PAZI!!!! u value mora '' a ne "" kad ima php !!!! -->
					<div class="col-md-2"><input type="text" style="color:black" class='form-control price' pid='<?php echo "$pro_id"; ?>' id='price-<?php echo "$pro_id"; ?>' value='<?php echo "$pro_price"; ?>' disabled></div><!-- ***PAZI!!!! u value mora '' a ne "" kad ima php !!!! -->
					<div class="col-md-2"><input type="text" style="color:black" class='form-control total' pid='<?php echo "$pro_id"; ?>' id='total-<?php echo "$pro_id"; ?>' value='<?php echo "$total"; ?>' disabled></div>	<!-- ***PAZI!!!! u value mora '' a ne "" kad ima php !!!! -->		
				</div>
			<?php
			$no=$no+1;
		}

		?>
			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4">
					<b>Ukupno:  <?php echo "$total_amt"; ?> din.</b>
				</div>
			</div>

		<?php
	}
}

//za brisanje iz cart.php
if (isset($_POST['removeFromCart'])) {
	$pid=$_POST['removeId'];
	$oid=$_POST['orderId'];
	$uid=$_SESSION['uid'];
	$sql="DELETE FROM korpa WHERE id_='$oid'";
	$run_query=mysqli_query($con,$sql);
	if ($run_query) {
		
		?>
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Lek je uspešno obrisan iz korpe! Nastavite kupovinu.</b>

			</div>
		<?php
	}
}

//za update cart.php
if (isset($_POST['updateProdactFromCart'])) {
	$pid=$_POST['updateId'];
	$uid=$_SESSION['uid'];	
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$total=$_POST['total'];
	// echo "$qty"; radi
	$sql="UPDATE korpa SET qty='$qty',cena='$price',ukupan_iznos='$total' WHERE user_id='$uid' AND lek_id='$pid' ";
	$run_query=mysqli_query($con,$sql);
	if ($run_query) {
		
		?>
			<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Broj lekova je uspešno izmenjen! Nastavite kupovinu.</b>
			</div>
		<?php
	}
}





?>