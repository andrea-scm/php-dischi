<?php
  include 'data.php';


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public\css\main_style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Dischi</title>
  </head>
  <body>
    <header></header>
    <div class="container">
      <div class="albums">
        <?php
          foreach ($dischi_db as $key => $value) {
            echo "<div class='album'"." value = '".$key."'".">";
            echo "<img src ='".$value['img']."'>";
            echo "<div class = 'info'>";
            echo "<div>".$key."</div>";
            echo "<div>".$value['artist']."</div>";
            echo "<div>".$value['release_date']."</div>";
            echo "</div>";
            echo "</div>";
          }
        ?>
      </div>
    </div>
  </body>
</html>
