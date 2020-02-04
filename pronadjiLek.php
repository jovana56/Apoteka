<?php
if (!isset ($_GET["naziv"])){
echo "Parametar Naziv nije prosleđen!";
} else {
$pomocna=$_GET["naziv"];
include "konekcija.php";

$sql="SELECT l.nazivLeka, l.godinaProizvodnje, p.nazivProizvodjaca,  p.adresa, d.imeDobavljaca  FROM lekovi l INNER JOIN proizvodjaci p ON l.proizvodjac=p.idProizvodjaca INNER JOIN dobavljaci d ON l.dobavljac=d.idDobavljac WHERE nazivLeka='".$pomocna."'";
$rezultat = $mysqli->query($sql);
$red = $rezultat->fetch_array(MYSQLI_NUM);

echo "<table   border='2px' border='solid' font-size='small' width='380px' height='150px' text-align='center' background-color='#d7eeef'>
<tr>
<th><b>Naziv leka</b></th>
<th><b>Godina proizvodnje</b></th>
<th><b>Naziv proizvodjaca</b> </th>
<th><b>Adresa proizvodjaca</b> </th>
<th><b>Naziv dobavljaca</b> </th>



</tr>";

 echo "<tr>";
 echo "<td>" . $red[0] . "</td>";
 echo "<td>" . $red[1] . "</td>";
 echo "<td>" . $red[2] . "</td>";
 echo "<td>" . $red[3] . "</td>";
 echo "<td>" . $red[4] . "</td>";

   
     

 echo "</tr>";

echo "</table>";
// $target_dir = "D:\wamp64\www\itehProjekat\slike\ "; // ???
// $target_dir=trim($target_dir);
// $target_file = $target_dir."$pomocna".".jpg";

}
$mysqli->close();
?>

