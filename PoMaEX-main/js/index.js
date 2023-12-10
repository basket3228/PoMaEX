window.addEventListener("DOMContentLoaded", () => {
  $(".nav-down-arrow").click(() => {
    $(".nav-sublist").toggleClass("open");
  });

  $(".popup-partylist").click(() => {
    $(".popup").addClass("display");
  });

  $(".popup-btn").click(() => {
    $(".popup").removeClass("display");
  });
});

$(".delete-btn").on("click", function () {
  const url = $(this).data("delete");

  if (confirm("パーティを削除しますか？")) {
    location.href = url;
    return;
  }

  $(".delete-btn").off("click");
});

$(".sync.clickable").on("click", function () {
  const clickedSync = $(this).attr("data-syncName");
  $(".popup-sync").addClass("display");
  $(".sync-popup").removeClass("display");
  for (var i = 0; i < $(".sync-popup").length; i++) {
    if ($(".sync-popup").eq(i).attr("data-syncName") === clickedSync) {
      $(".sync-popup").eq(i).addClass("display");
    }
  }
});

$(".popup-btn").click(() => {
  $(".popup-sync").removeClass("display");
});

スクロール上下;
document.querySelector(".down").addEventListener("click", () => {
  let scrollArea = document.querySelector(".main");
  let scrollAreaHeight = scrollArea.scrollHeight;
  scrollArea.scrollTop = scrollAreaHeight;
});
document.querySelector(".up").addEventListener("click", () => {
  let scrollArea = document.querySelector(".main");
  scrollArea.scrollTop = 0;
});
