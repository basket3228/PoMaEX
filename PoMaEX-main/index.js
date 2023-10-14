$(".party-delete").click(function () {
  const url = $(this).data("delete");

  if (confirm("パーティを削除しますか？")) {
    location.href = url;
    return;
  } else {
    return;
  }
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
