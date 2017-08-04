
var qs = "?page=";

function toggle(to, pop) {
  if ($('#' + to).css("display") == "none") {
    if (!pop) {
      history.pushState(null, null, qs + to);
      ga('send', 'pageview', location.pathname + location.search);
    }
    $('.page:visible').fadeOut(250);
    $('#' + to).fadeIn(250);
    $('.page-link.selected').removeClass('selected');
    $('#' + to + 'Link').addClass('selected');
  }
}

$(window).on('popstate', function(e) {
  var index = location.search.lastIndexOf(qs);
  var to;
  if (index == -1) to = $('.page:first-child').attr("id");
  else to = location.search.substr(index + qs.length, location.search.length);
  toggle(to, true);
});
