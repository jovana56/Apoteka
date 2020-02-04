<?php
if(isset($_GET['uslov'])){
	prikaziProizvodjaceSaUslovom($_GET['uslov']);
}else{
 	prikaziSveProizvodjace();
}

function prikaziSveProizvodjace(){
	header("Content-type: application/json");?>{"proizvodjaci":<?php
require_once "konekcija.php";
$sql="SELECT nazivProizvodjaca, adresa, brojIzdatihLekova FROM proizvodjaci";
if (!$q=$mysqli->query($sql)){
//ako se upit ne izvrši
echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
exit();
} else {
//ako je upit u redu
if ($q->num_rows>0){
//ako ima rezultata u bazi
$niz = array();
while ($red=$q->fetch_object()){
$niz[] = $red;
}
// print_r ($niz);
$niz_json = json_encode ($niz);
print ($niz_json);
} else {
//ako nema rezultata u bazi
echo '{"greska":"Nema rezultata."}';
}
}
?>}<?php
}

function prikaziProizvodjaceSaUslovom($uslov){
header("Content-type: application/json");?>{"proizvodjaci":<?php
require_once "konekcija.php";
$sql="SELECT nazivProizvodjaca, adresa, brojIzdatihLekova FROM proizvodjaci WHERE brojIzdatihLekova>='".$uslov."'";
if (!$q=$mysqli->query($sql)){
//ako se upit ne izvrši
echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
exit();
} else {
//ako je upit u redu
if ($q->num_rows>0){
//ako ima rezultata u bazi
$niz = array();
while ($red=$q->fetch_object()){
$niz[] = $red;
}
// print_r ($niz);
$niz_json = json_encode ($niz);
print ($niz_json);
} else {
//ako nema rezultata u bazi
echo '{"greska":"Nema rezultata."}';
}
}
?>}<?php
}
?>