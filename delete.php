<?php
include "konekcija.php";
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($mysqli->connect_error) {
    die("err");
} 
if (isset($_REQUEST['id'])){
$sql = "DELETE FROM lekovi WHERE lekID=".$_REQUEST['id'];
if ($mysqli->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "err";
}
$mysqli->close();
}

?>
