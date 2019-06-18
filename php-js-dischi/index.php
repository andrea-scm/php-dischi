<?php
  include 'data.php';


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
    <header></header>
    <div class="container">
      <div class="albums">
      </div>
    </div>

    <script id="template" type="text/x-handlebars-template">
      <div class='album' value = "{{title}}">
        <img src ='{{img}}'>
        <div class = 'info'>
          <div>{{title}}</div>
          <div>{{artist}}</div>
          <div>{{release_date}}</div>
        </div>
      </div>
    </script>
    <script src="public/js/script.js" charset="utf-8"></script>
  </body>
</html>
