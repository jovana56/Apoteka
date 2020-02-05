<?php
$vote = $_REQUEST['glas'];
$filename = "anketarezultati.txt";
$sadrzaj = file($filename);

$niz = explode("||", $sadrzaj[0]);
$odlican = $niz[0];
$vrlodobar = $niz[1];
$dobar=$niz[2];
$los=$niz[3];

if ($vote == 0) {
  $odlican = $odlican + 1;
}
if ($vote == 1) {
  $vrlodobar = $vrlodobar + 1;
}
if ($vote == 2) {
  $dobar = $dobar + 1;
}
if ($vote == 3) {
  $los = $los + 1;
}

$ubaciglas = $odlican."||".$vrlodobar."||".$dobar."||".$los;
$fp = fopen($filename,"w");
fputs($fp,$ubaciglas);
fclose($fp);
?>

<h2>Rezultati glasanja:</h2>
<table style="color:black">
<tr>
<td><b>odličan: <b></td>
<td>

<?php echo(100*round($odlican/($vrlodobar+$odlican+$dobar+$los),2)); ?>%
</td>
</tr>
<tr>
<td><b>vrlo dobar: <b></td>
<td>
<?php echo(100*round($vrlodobar/($vrlodobar+$odlican+$dobar+$los),2)); ?>%
</td>
</tr>
<tr>
<td><b>dobar: <b></td>
<td>
<?php echo(100*round($dobar/($vrlodobar+$odlican+$dobar+$los),2)); ?>%
</td>
</tr>
<tr>
<td><b>loš: <b></td>
<td>
<?php echo(100*round($los/($vrlodobar+$odlican+$dobar+$los),2)); ?>%
</td>
</tr>
</table>