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

//スクロール上下
document.querySelector(".down").addEventListener("click", () => {
  let scrollArea = document.querySelector(".main");
  let scrollAreaHeight = scrollArea.scrollHeight;
  scrollArea.scrollTop = scrollAreaHeight;
});
document.querySelector(".up").addEventListener("click", () => {
  let scrollArea = document.querySelector(".main");
  scrollArea.scrollTop = 0;
});

//ドラッグ&ドロップの編集
const draggableItems = document.querySelectorAll(".edit-drag");
const editFrame = document.querySelectorAll(".party-wrap");
const editDeleteBtn = document.querySelectorAll(".edit-delete-btn");
const partyEditSubmitBtn = document.querySelector(".party-edit-submit");
const partyEditForm = document.querySelector(".party-edit");

partyEditSubmitBtn.addEventListener("click", (e) => {
  e.preventDefault();

  for (let index = 0; index < editFrame.length; index++) {
    if (editFrame[index].children[0] !== undefined) {
      $(`input[name="trainer_id${index + 1}"]`).val(editFrame[index].children[0].dataset.id);
    }
  }

  partyEditForm.action = "party-edit-post.php";
  partyEditForm.submit();
});

draggableItems.forEach((element) => {
  element.addEventListener("dragstart", (event) => {
    event.dataTransfer.setData("trainer-id", event.target.dataset.id);
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
    edit(element, event);
  });

  element.addEventListener("dragover", function (event) {
    event.preventDefault();
  });
});

editDeleteBtn.forEach((element) => {
  element.addEventListener("click", () => {
    element.parentElement.parentElement.innerHTML = "";
  });
});

function edit(element, event) {
  event.preventDefault();
  const trainerId = event.dataTransfer.getData("trainer-id");
  const stars = event.dataTransfer.getData("stars");
  const ex = event.dataTransfer.getData("ex");
  const trainerSrc = event.dataTransfer.getData("trainer-img");
  const syncSrc = event.dataTransfer.getData("sync-img");
  const type = event.dataTransfer.getData("type");

  element.innerHTML = "";

  const partyEl = document.createElement("li");
  partyEl.setAttribute("data-id", trainerId);
  partyEl.setAttribute("type", type);
  partyEl.setAttribute("draggable", "false");
  partyEl.classList.add("party-detail", "edit-frame", `CS-${type}-detail`);

  const starsEl = document.createElement("div");
  starsEl.classList.add("stars");

  for (i = 0; i < Number(stars); i++) {
    const starImg = document.createElement("img");
    starImg.src = "../../img/star.png";
    starImg.setAttribute("draggable", "false");
    starsEl.appendChild(starImg);
  }

  for (i = 0; i < 5 - Number(stars); i++) {
    const nonStarImg = document.createElement("img");
    nonStarImg.src = "../../img/non_star.png";
    nonStarImg.setAttribute("draggable", "false");
    starsEl.appendChild(nonStarImg);
  }

  const exEl = document.createElement("div");
  exEl.classList.add("EX");

  const exImg = document.createElement("img");
  exImg.setAttribute("draggable", "false");

  if (Number(ex) === 0) {
    exImg.src = "../../img/NotEX.png";
  } else {
    exImg.src = "../../img/EX.png";
  }

  exEl.appendChild(exImg);

  const trainerImg = document.createElement("img");
  trainerImg.src = trainerSrc;
  trainerImg.setAttribute("draggable", "false");

  const syncImg = document.createElement("img");
  syncImg.classList.add("party-detail-sync", `CS-${type}-detail`);
  syncImg.src = syncSrc;
  syncImg.setAttribute("draggable", "false");

  const deleteBtn = document.createElement("button");
  deleteBtn.classList.add("edit-delete-btn", "party-delete");
  deleteBtn.addEventListener("click", () => {
    deleteBtn.parentElement.parentElement.innerHTML = "";
  });

  partyEl.appendChild(starsEl);
  partyEl.appendChild(exEl);
  partyEl.appendChild(trainerImg);
  partyEl.appendChild(syncImg);
  partyEl.appendChild(deleteBtn);

  element.appendChild(partyEl);
}
