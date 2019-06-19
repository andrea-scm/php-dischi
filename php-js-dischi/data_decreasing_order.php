<?php
  include 'data.php';
  $increasing_dischi_db = $dischi_db;

  function increasing_order($a, $b)
  {
      if ($a['release_date'] == $b['release_date']) {
        return 0;
      }
      //ordine decrescente
      return $a['release_date'] < $b['release_date'];
  }


  usort($increasing_dischi_db, "increasing_order");
  //var_dump($increasing_dischi_db);



  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
    echo json_encode($increasing_dischi_db);
  }

?>
