<?php
  $dischi_db = [
    'The Black Parade' => [
      'img' => 'src\img\album_6.jpg',
      'artist' => 'My Chemical Romance',
      'release_date' => 2006
    ],
    'Born In The Echoes' => [
      'img' => 'src\img\album_5.jpg',
      'artist' => 'The Chemical Brothers',
      'release_date' => 2015
    ],
    'The Spark' => [
      'img' => 'src\img\album_4.jpg',
      'artist' => 'Enter Shikari',
      'release_date' => 2017
    ],
    'Il Suicidio dei Samurai' => [
      'img' => 'src\img\album_3.jpg',
      'artist' => 'Verdena',
      'release_date' => 2004
    ],
    'Youth' => [
      'img' => 'src\img\album_2.jpg',
      'artist' => 'Citizen',
      'release_date' => 2013
    ],
    'Coulormeinkindness' => [
      'img' => 'src\img\album_1.jpg',
      'artist' => 'Basement',
      'release_date' => 2012
    ]
  ];

  //serve per non mostrare l'echo a inizio pagina
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
    echo json_encode($dischi_db);
  }
?>
