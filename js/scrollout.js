/* Fonction scroll pour partie bestiaire */

$( document ).ready(function() {
  var text = $(".text");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 1500) {
      text.removeClass("hidden");
    } else {
      text.addClass("hidden");
    }
  });
});
