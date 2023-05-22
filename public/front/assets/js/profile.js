let tabs = document.querySelectorAll(".tabs li");
let tabsArray = Array.from(tabs);
let divs = document.querySelectorAll(".tabContent > div");
let divsArray = Array.from(divs);
tabsArray.forEach((ele) => {
  ele.addEventListener("click", function (e) {
    tabsArray.forEach((ele) => {
      ele.classList.remove("activeTab");
    });
    e.currentTarget.classList.add("activeTab");
    divsArray.forEach((div) => {
      div.style.display = "none";
    });
    document.querySelector(e.currentTarget.dataset.cont).style.display = "flex";
  });
});
