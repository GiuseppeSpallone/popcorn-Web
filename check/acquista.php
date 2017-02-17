<?php

require_once 'stampa_prezzi.php';

$quantita = filter_input(INPUT_POST, 'quantita');
$data = filter_input(INPUT_POST, 'data');

$totale = $quantita * $prezzo['feriale'];

echo $totale;


?>
