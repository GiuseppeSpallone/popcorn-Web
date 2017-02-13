<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$prezzoFeriale = filter_input(INPUT_POST, 'feriali');
$prezzoFestivo = filter_input(INPUT_POST, 'festivi');
$prezzoTreD = filter_input(INPUT_POST, '3d');

$prezzo3Ingressi = filter_input(INPUT_POST, '3ingressi');
$prezzo5Ingressi = filter_input(INPUT_POST, '5ingressi');
$prezzo10Ingressi = filter_input(INPUT_POST, '10ingressi');

//Controllo presenza campi
if (!$prezzoFeriale || !$prezzoFestivo || !$prezzoTreD || !$prezzoTreD || !$prezzo3Ingressi || !$prezzo5Ingressi || !$prezzo10Ingressi) {
    header("location: ../edit_prezzi.php?errorPrezzi=mancanoCampi");
    die();
}

$countPrezzi = mysqli_num_rows($db_instance->select([], 'offerta'));

if ($countPrezzi == 0) {
    $result = $db_instance->insert('offerta',
        array('feriale', 'festivo', '3d', '3ingressi', '5ingressi', '10ingressi'),
        array($prezzoFeriale, $prezzoFestivo, $prezzoTreD, $prezzo3Ingressi, $prezzo5Ingressi, $prezzo10Ingressi));

    header("location: ../prezzi.php");

} else {

    $result = $db_instance->update('offerta', "feriale ='$prezzoFeriale',
                  festivo = '$prezzoFestivo',
                  3d = '$prezzoTreD',
                  3ingressi = '$prezzo3Ingressi',
                  5ingressi = '$prezzo5Ingressi',
                  10ingressi = '$prezzo10Ingressi'", "id=0");

    header("location: ../edit_prezzi.php");
}


$db_instance->connection->close();

?>
