<?php
  include 'data.php';


  //serve per non mostrare l'echo a inizio pagina
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
    echo json_encode($dischi_db);
  }
 ?>
