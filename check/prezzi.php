<?php
include 'stampa_prezzi.php';
include 'connessioneDB.php';

$prezzoFeriale = filter_input(INPUT_POST, 'feriali');
$prezzoFestivo = filter_input(INPUT_POST, 'festivi');
$prezzoTreD = filter_input(INPUT_POST, '3d');

$prezzo3Ingressi = filter_input(INPUT_POST, '3ingressi');
$prezzo5Ingressi = filter_input(INPUT_POST, '5ingressi');
$prezzo10Ingressi = filter_input(INPUT_POST, '10ingressi');

//Controllo presenza campi
if (!$prezzoFeriale || !$prezzoFestivo || !$prezzoTreD || !$prezzoTreD || !$prezzo3Ingressi || !$prezzo5Ingressi || !$prezzo10Ingressi) {
    die ("Mancano dei dati");
}

if($countPrezzi == 0){
    $query = "INSERT INTO offerta (feriale, festivo, 3d, 3ingressi, 5ingressi, 10ingressi)
          VALUES
          ('$prezzoFeriale', '$prezzoFestivo', '$prezzoTreD', '$prezzo3Ingressi', '$prezzo5Ingressi', '$prezzo10Ingressi');";
}else{
    $query = "UPDATE offerta SET 
              feriale ='$prezzoFeriale',
              festivo = '$prezzoFestivo',
              3d = '$prezzoTreD',
              3ingressi = '$prezzo3Ingressi',
              5ingressi = '$prezzo5Ingressi',
              10ingressi = '$prezzo10Ingressi'
              WHERE id = 0;";
}

$risultato = $connessione->query($query);

if (!$risultato) {
    echo "Errore della query: " . $connessione->error . ".";

    //creare messaggio d'errore
} else {
    header("location: ../index.php");
    echo "Inserimenti effettuati correttamente.";

    //creare messaggio di benvenuto
}

$connessione->close();
?>
