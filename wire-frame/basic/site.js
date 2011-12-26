(function($) {

  $(document).ready(function() {

    $.ajax("/fetch_news.php", {
      type: 'GET',
      dataType: 'xml',
      cache: false,
      success: function(data) {
        $(data).find("channel > item").each(function() {
          var title = $('<header>').html(parseHTML($(this).find("title").text()));
          var body = $('<div>').html(parseHTML($(this).find("description").text()));
          var article = $('<article>').append(title).append(body);
          $("section#news").append(article);
        });
      }
    });

  });

})(jQuery);

function parseHTML(value) {
  return $('<div/>').html(value).html();
}
