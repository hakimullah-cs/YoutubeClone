const tabsbox = document.querySelector(".tabs-box");
const arrows = document.querySelectorAll(".icon ion-icon");
arrows.forEach((item) => {
  item.addEventListener("click", () => {
    tabsbox.scrollLeft += item.id === "left" ? -350 : 350;
  });
});
console.log(tabsbox);
let isgragging = false;
let dragging = (e) => {
  if (!isgragging) {
    return;
  }
  tabsbox.scrollLeft -= e.movementX;
};
const drapstop = () => {
  isgragging = false;
};
tabsbox.addEventListener("mousedown", () => (isgragging = true));
tabsbox.addEventListener("mousemove", dragging);
document.addEventListener("mnouseup", drapstop);

// Active Class Toggle
let tabs = document.querySelectorAll(".tabs-box .tab");
console.log(tabs);
tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    tabs.forEach((change) => {
      change.classList.remove("active");
    });
    tab.classList.add("active");
  });
});
