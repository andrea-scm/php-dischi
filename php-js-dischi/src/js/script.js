var $ = require('jquery');

$(document).ready(function () {
  $.ajax({
    'url': 'http://localhost:8888/boolean/ex/php-js-dischi/data.php',
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
});

function schedeDischi(db_dischi) {
  var keys = Object.keys(db_dischi);
  var album = [];
  for (var i = 0; i < keys.length; i++) {
    album.push({
      "title": keys[i],
      "img": db_dischi[keys[i]]['img'],
      "artist": db_dischi[keys[i]]['artist'],
      "release_date": db_dischi[keys[i]]['release_date']
    });
  }
  return album
};
