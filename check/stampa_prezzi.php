<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$resultPrezzi = $db_instance->select([], 'offerta');

$countPrezzi = mysqli_num_rows($resultPrezzi); //conteggiare il numero di records trovati all'interno del nostro db sulla base di una data query

if ($countPrezzi == 0) {
    //vuoto
} else {
    $prezzo = $resultPrezzi->fetch_array(MYSQLI_ASSOC);
}
$db_instance->connection->close();

?>