let clothestab = document.querySelectorAll(".clothesTab li");
let tabsArray = Array.from(clothestab);
let tabImg = document.querySelectorAll(".tabImg > div");
let divsArray = Array.from(tabImg);
tabsArray.forEach((ele) => {
  ele.addEventListener("click", function (e) {
    tabsArray.forEach((ele) => {
      ele.classList.remove("activeclothTab");
    });
    e.currentTarget.classList.add("activeclothTab");
    divsArray.forEach((div) => {
      div.style.display = "none";
    });
    document.querySelector(e.currentTarget.dataset.cont).style.display = "flex";
  });
});
