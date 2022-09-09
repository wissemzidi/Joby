const sideBar = document.querySelector("aside");
const hideAside = document.getElementById("hideSideBar");
const showAside = document.getElementById("showSideBar");

showAside.addEventListener("click", () => {
  sideBar.style.display = "flex";
  sideBar.style.animation = "fadeIn .4s ease-out forwards";
  setTimeout(() => {
    sideBar.style.opacity = "1";
  }, 400);
});

hideAside.addEventListener("click", () => {
  sideBar.style.display = "none";
});
