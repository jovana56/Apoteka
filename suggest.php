<?php
if (!isset ($_GET["unos"])){
echo "Parametar Unos nije prosleđen!";
} else {
$pomocna=$_GET["unos"];
include "konekcija.php";
$sql="SELECT lekID, nazivLeka FROM lekovi WHERE nazivLeka LIKE '$pomocna%'ORDER BY nazivLeka";
$rezultat = $mysqli->query($sql);
if ($rezultat->num_rows==0){
echo "U bazi ne postoji lek koji počinje sa " . $pomocna;
} else {
while($red = $rezultat->fetch_object()){
?>
<a href="#" onclick="place(this)"><?php  echo $red->nazivLeka;?></a>
<br/>
<?php
}
}
$mysqli->close();
}
?>
