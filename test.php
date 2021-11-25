<?php
$serverName = "DIEGONAVARRETE-";

$connectionInfo = array("Database" => "Pasaporte_Covid" );
$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn){
    echo "Conexión establecida.<br />";
}else{
    echo "Conexión no se pudo estrablecer.<br />";
    die (print_r(sqlsrv_errors(), true));
}

?>
