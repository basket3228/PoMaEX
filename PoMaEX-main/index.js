$(".party-delete").click(function () {
  const url = $(this).data("delete");

  if (confirm("パーティを削除しますか？")) {
    location.href = url;
    return;
  } else {
    return;
  }
});
