<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$result = $db_instance->select([], 'film', 'id = 43');

$countPrezzi = mysqli_num_rows($result); //conteggiare il numero di records trovati all'interno del nostro db sulla base di una data query

if ($countPrezzi == 0) {
    //$vuoto = "NULL";
} else {
    $resrow = mysqli_fetch_row($result); //array contenente i valori di ogni campo riscontrato nel recordset che potremo poi richiamare specificando il relativo indice numerico

    $id = $resrow[0];
    $titolo = $resrow[1];
    $nazione = $resrow[2];
    $anno = $resrow[3];
    $genere = $resrow[4];
    $durata = $resrow[5];
    $regia = $resrow[6];
    $cast = $resrow[7];
    $produzione = $resrow[8];
    $distribuzione = $resrow[9];
    $data = $resrow[10];
    $trama = $resrow[11];
}
$db_instance->connection->close();

?>