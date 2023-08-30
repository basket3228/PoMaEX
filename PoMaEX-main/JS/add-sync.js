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

var trainerBtn = document.getElementById("trainer-btn");
var trainerList = document.getElementById("trainer-list");
var trainerBtn = document.getElementById("trainer-btn");
var trainerList = document.getElementById("trainer-list");

trainerBtn.addEventListener("click", function (e) {
  e.preventDefault();
  if (trainerList.classList.contains("hidden")) {
    trainerList.classList.remove("hidden");
  } else {
    trainerList.classList.add("hidden");
  }
});
