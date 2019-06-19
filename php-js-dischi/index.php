<?php
  include 'data_increasing_order.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public\css\main_style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
    <title>Dischi</title>
  </head>
  <body>
    <header>
      <div class="search-bar">
        <input type="text" name="search-bar" class = 'search-artist' placeholder="Ricerca artista">
      </div>
    </header>
    <div class="select">
      <select class="order" name="ordering">
        <option value="normal">Ordina per:</option>
        <option value="increasing">Ordine crescente</option>
        <option value="decreasing">Ordine decrescente</option>
      </select>
    </div>
    <div class="container">
      <div class="albums">
      </div>
    </div>

    <script id="template" type="text/x-handlebars-template">
      <div class='album' value = "{{title}}">
        <img src ='{{img}}'>
        <div class = 'info'>
          <div class = 'title' data-value = "{{title}}">{{title}}</div>
          <div class = 'artist' data-value = "{{artist}}">{{artist}}</div>
          <div class = 'release_date' data-value = "{{release_date}}">{{release_date}}</div>
        </div>
      </div>
    </script>
    <script src="public/js/script.js" charset="utf-8"></script>
  </body>
</html>
