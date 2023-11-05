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

const draggableItems = document.querySelectorAll(".edit-drag");
const editFrame = document.querySelectorAll(".party-wrap");

draggableItems.forEach((element) => {
  element.addEventListener("dragstart", (event) => {
    event.dataTransfer.setData("stars", event.target.dataset.stars);
    event.dataTransfer.setData("ex", event.target.dataset.ex);
    event.dataTransfer.setData("trainer-img", event.target.querySelector(".party-detail-trainer").src);
    event.dataTransfer.setData("sync-img", event.target.querySelector(".party-detail-sync").src);
    event.dataTransfer.setData("type", event.target.dataset.type);
  });
});

editFrame.forEach((element) => {
  const editFrameNumber = element.dataset.partynum;

  element.addEventListener("drop", function (event) {
    event.preventDefault();
    const stars = event.dataTransfer.getData("stars");
    const ex = event.dataTransfer.getData("ex");
    const trainerSrc = event.dataTransfer.getData("trainer-img");
    const syncSrc = event.dataTransfer.getData("sync-img");
    const type = event.dataTransfer.getData("type");

    element.innerHTML = "";

    const partyEl = document.createElement("li");
    partyEl.setAttribute("type", type);
    partyEl.classList.add("party-detail", "edit-frame", `CS-${type}-detail`);

    const starsEl = document.createElement("div");
    starsEl.classList.add("stars");

    for (i = 0; i <= Number(stars); i++) {
      const starImg = document.createElement("img");
      starImg.src = "../../img/star.png";
      starsEl.appendChild(starImg);
    }

    const exEl = document.createElement("div");
    exEl.classList.add("EX");

    const exImg = document.createElement("img");

    if (Number(ex) === 0) {
      exImg.src = "../../img/NotEX.png";
    } else {
      exImg.src = "../../img/EX.png";
    }

    exEl.appendChild(exImg);

    const trainerImg = document.createElement("img");
    trainerImg.src = trainerSrc;

    const syncImg = document.createElement("img");
    syncImg.classList.add("party-detail-sync", `CS-${type}-detail`);
    syncImg.src = syncSrc;

    partyEl.appendChild(starsEl);
    partyEl.appendChild(exEl);
    partyEl.appendChild(trainerImg);
    partyEl.appendChild(syncImg);

    element.appendChild(partyEl);
  });
});

editFrame.forEach((element) => {
  element.addEventListener("dragover", function (event) {
    event.preventDefault();
  });
});
