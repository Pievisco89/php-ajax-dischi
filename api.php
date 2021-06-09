<?php 

  include __DIR__ . '/data/db.php';

  $genres = [];
  //operatore ternario: se la mia chiamata Get di genere è vuota o se è uguale a all allora albums=discs sennò è un array vuoto nel quale verranno pushati i vari generi
  $albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $discs : []; 

  foreach($discs as $disc){
  //se nell'array non è presente il genre allora lo pusho dentro all'array genres
    if(!in_array($disc['genre'],$genres)){
      $genres[] = $disc['genre'];
    }
  }

  //riempio l'array albums con gli elementi relativi al genere che ho selezionato
  if(count($albums) === 0){ //passo qualcosa che non è all

    foreach($discs as $disc){
      //pusho in album l'elemento che ha lo stesso genere cliccato
      if($disc['genre'] === $_GET['genre']){
        $albums[] = $disc;
      }

    }

  }


  $response = [
    'albums' => $albums,
    'genres' => $genres,
  ];

  header('Content-Type: application/json');


  echo json_encode($response);

?>