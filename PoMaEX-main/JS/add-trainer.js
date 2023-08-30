function FixedAnime() {
  var headerH = $("#header").outerHeight(true);
  var scroll = $(window).scrollTop();
  if (scroll >= headerH) {
    $("#header").addClass("fixed");
  } else {
    $("#header").removeClass("fixed");
  }
}

$(window).scroll(function () {
  FixedAnime();
});
