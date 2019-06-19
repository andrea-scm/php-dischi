var $ = require('jquery');

$(document).ready(function () {
  var url = 'http://localhost:8888/boolean/ex/php-dischi/php-js-dischi/';
  //stampa i dischi
  disegnaDischi(url);

  //filtra i dischi per artista
  $('.search-artist').keyup(function (search) {
    var searchInput = $(this).val().toLowerCase();
    //console.log(searchInput);
    var keyCode = (search.which);
    //console.log(keyCode);
    if (keyCode != 32) {  //in modo che viene omesso lo spazio durante la ricerca,
                        //altrimenti al keyup dello spazio mostra tutti gli artisti
      if (((keyCode > 64 && keyCode < 123) || keyCode == 8 )  && searchInput != '') {
        $('.artist').each(function () {
          var artistName = $(this).attr('data-value').toLowerCase();
          //console.log(artistName);
          //se l' artistName corrente include il carattere/i caratteri correnti dell'input
          //allora mostro l'artistName che includono quei caratteri altrimenti nascondo
          //l'artistName corrente
          if (artistName.includes(searchInput)) {
            $(this).parents('.album').show();
          }
          else {
            $(this).parents('.album').hide();
          };
        });
      }else {
        $('.album').show(); //rimostro gli artisti
      };
    }
  });

  //ordina i dischi per data
  $('.order').on('change',function(){
    console.log($('.order').val());
    if ($('.order').val() == 'increasing') {//li ordina in modo crescete
      disegnaDischiOrdineCrescente(url);
    }else if ($('.order').val() == 'decreasing') {//li ordina in modo decrescete
      disegnaDischiOrdineDecrescente(url);
    }else{//altrimenti li mostra di base
      disegnaDischi(url);
    }
  })

});


function disegnaDischi(url) {
  $('.albums').html('');
  $('.order').val('normal');
  $.ajax({
    'url': url + 'normal_data.php',
    'method': 'GET',
    'success': function (data) {
      var db = JSON.parse(data);
      var dischi = schedeDischi(db);
      var template = Handlebars.compile($('#template').html());
      var html;
      for (var field in dischi) {
        html = template(dischi[field]);
        $('.albums').append(html)
      }
    },
    'error': function () {
      alert('errore');
    }
  });
}

function disegnaDischiOrdineCrescente(url) {
  $('.albums').html('');
  $.ajax({
    'url': url + 'data_increasing_order.php',
    'method': 'GET',
    'success': function (data) {
      var db = JSON.parse(data);
      console.log(db);
      var dischi = schedeDischi(db);
      var template = Handlebars.compile($('#template').html());
      var html;
      for (var field in dischi) {
        html = template(dischi[field]);
        console.log(dischi[field]['release_date']);
        $('.albums').append(html)
      }
    },
    'error': function () {
      alert('errore');
    }
  });
}

function disegnaDischiOrdineDecrescente(url) {
  $('.albums').html('');
  $.ajax({
    'url': url + 'data_decreasing_order.php',
    'method': 'GET',
    'success': function (data) {
      var db = JSON.parse(data);
      console.log(db);
      var dischi = schedeDischi(db);
      var template = Handlebars.compile($('#template').html());
      var html;
      for (var field in dischi) {
        html = template(dischi[field]);
        console.log(dischi[field]['release_date']);
        $('.albums').append(html)
      }
    },
    'error': function () {
      alert('errore');
    }
  });
}

function schedeDischi(db_dischi) {
  var keys = Object.keys(db_dischi);
  var album = [];
  for (var i = 0; i < keys.length; i++) {
    album.push({
      "title": db_dischi[keys[i]]['title'],
      "img": db_dischi[keys[i]]['img'],
      "artist": db_dischi[keys[i]]['artist'],
      "release_date": db_dischi[keys[i]]['release_date']
    });
  }
  return album
};
