<?php
require_once '../controllers/DbManager.php';

$db_instance = new DBManager();


$titolo = filter_input(INPUT_POST, 'titolo');
$nazione = filter_input(INPUT_POST, 'nazione');
$anno = filter_input(INPUT_POST, 'anno');
$genere = filter_input(INPUT_POST, 'genere');
$durata = filter_input(INPUT_POST, 'durata');
$regia = filter_input(INPUT_POST, 'regia');
$cast = filter_input(INPUT_POST, 'cast');
$produzione = filter_input(INPUT_POST, 'produzione');
$distribuzione = filter_input(INPUT_POST, 'distribuzione');
$data_uscita = filter_input(INPUT_POST, 'data_uscita');
$trama = filter_input(INPUT_POST, 'trama');
//

if (filter_input(INPUT_POST, 'prog', FILTER_VALIDATE_BOOLEAN) == true) $in_prog = 1; else $in_prog = 0;

$campi = array("titolo", "nazione", "anno", "genere", "durata", "regia", "cast", "produzione", "distribuzione", "data_uscita", "trama", "id_poster", "in_progr");

$valori = array($titolo, $nazione, $anno, $genere, $durata, $regia, $cast, $produzione, $distribuzione, $data_uscita, $trama, 'image/' . $titolo, $in_prog);

$result = $db_instance->insert('film', $campi, $valori);
if ($result) {
    echo "ok";
}else {echo "errore";}
$db_instance->connection->close();

//TODO
/*    
    if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
          echo "ciao";
         move_uploaded_file($file_tmp,"C:\xampp\htdocs\popcorn-master\image\\".$file_name);
          echo $file_name;
        
         
      }else{
         print_r($errors);
      }
   }*/

?>