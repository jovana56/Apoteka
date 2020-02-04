<?php
        include "konekcija2.php";

        $table="lekovi";
        $sjoin="inner join proizvodjaci ON lekovi.proizvodjac=proizvodjaci.idProizvodjaca inner join dobavljaci ON lekovi.dobavljac=dobavljaci.idDobavljac";
        $primaryKey='lekID';
        $columns = array(
array(
        'db' => 'lekID',
        'dt' => 'DT_RowId',
        'formatter' => function( $d, $row ) {
            return $d;
        }
      ),
    array( 'db' => 'lekID', 'dt' => 0 ),
    array( 'db' => 'nazivLeka',  'dt' => 1 ),
    array( 'db' => 'godinaProizvodnje',   'dt' => 2 ),
    array( 'db' => 'nazivProizvodjaca',     'dt' => 3 ),
    array( 'db' => 'adresa',     'dt' => 4 ),
    array( 'db' => 'imeDobavljaca',     'dt' => 5 ),
    array( 'db' => 'adresaDobavljaca',     'dt' => 6 ),
    

);
$sql_details = array(
    'user' => $db_user,
    'pass' => $db_pass,
    'db'   => $db_db,
    'host' => $db_server
);


require( 'class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns,$sjoin )
);
        
?>




