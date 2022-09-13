const toTopBtn = document.getElementById("toTop");
const sideBar = document.querySelector("aside");
const hideAside = document.getElementById("hideSideBar");
const showAside = document.getElementById("showSideBar");
const main = document.querySelector("main");
const search = document.querySelector("#searchInput");
const searchMenu = document.querySelector("#search__drop-down");
const searchMenuContent = document.querySelector("#search__drop-down ul");
const goToSearch = document.getElementsByClassName("goToSearch");

for (let i = 0; i < goToSearch.length; i++) {
  goToSearch[i].addEventListener("click", (e) => {
    localStorage.searchLink = `${goToSearch[i].textContent.trim()}`;
  });
}

window.addEventListener("scroll", function () {
  if (window.scrollY >= 800) {
    toTopBtn.style.animation = "fadeIn .2s ease-out forwards";
    toTopBtn.style.display = "grid";
  } else {
    toTopBtn.style.animation = "fadeOut .2s ease-out forwards";
    setTimeout(() => {
      toTopBtn.style.display = "none";
    }, 200);
  }
});

toTopBtn.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

showAside.addEventListener("click", () => {
  sideBar.style.display = "flex";
  sideBar.className = "open";
  sideBar.style.animation = "fadeIn .4s ease-out forwards";
  setTimeout(() => {
    sideBar.style.opacity = "1";
  }, 400);
});

hideAside.addEventListener("click", () => {
  sideBar.style.display = "none";
  sideBar.className = "close";
  sideBar.style.animation = "";
});

search.addEventListener("keyup", function (e) {
  if (search.value.trim().length >= 3) {
    searchMenu.style.display = "block";
  } else {
    searchMenu.style.display = "none";
  }
  document.addEventListener("click", function (e) {
    var target = e.target;
    if (target.id !== "#search__drop-down" && target.id !== "searchInput") {
      searchMenu.style.display = "none";
    }
  });
});

searchMenuContent.innerHTML = `
  <a href="#"><li>Popular</li></a>
  <a href="#"><li>Finance</li></a>
  <a href="#"><li>Freelance</li></a>
  <a href="#"><li>Developer</li></a>
  <a href="#"><li>For You</li></a>
`;

window.onscroll = function (e) {
  showAside.style.display = "block";
};
