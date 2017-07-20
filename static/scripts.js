
function toggle(to) {
  if ($('#' + to).css("display") == "none") {
    $('.page:visible').fadeOut(250);
    $('#' + to).fadeIn(250);
    $('.page-link.selected').removeClass('selected');
    $('#' + to + 'Link').addClass('selected');
  }
}
