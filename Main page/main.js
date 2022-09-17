const toTopBtn = document.getElementById("toTop");
const sideBar = document.querySelector("aside");
const hideAside = document.getElementById("hideSideBar");
const showAside = document.getElementById("showSideBar");
const main = document.querySelector("main");
const search = document.querySelector("#searchInput");
const searchMenu = document.querySelector("#search__drop-down");
const searchMenuContent = document.querySelector("#search__drop-down ul");
const goToSearch = document.getElementsByClassName("goToSearch");
const searchBtn = document.getElementById("searchBtn");
const focusOn = document.querySelector(".interests");

console.log(focusOn);

for (let i = 0; i < goToSearch.length; i++) {
  goToSearch[i].addEventListener("click", (e) => {
    localStorage.searchLink = `${goToSearch[i].textContent.trim()}`;
  });
}

/* focus on the search bar automatically */
window.onload = function () {
  search.focus();
};

/* on click 'Enter' => go to search page */
search.addEventListener("focus", (e) => {
  window.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
      searchBtn.click();
    }
  });
});

focusOn.addEventListener("click", function (e) {
  localStorage.setItem("interestFocus", true);
});

/* on click search btn save the input value on local storage */
searchBtn.addEventListener("click", (e) => {
  localStorage.searchLink = `${search.value.trim()}`;
});

window.addEventListener("scroll", function () {
  if (window.matchMedia("(min-width: 40rem)").matches) {
    if (window.scrollY >= 600) {
      showAside.style.display = "grid";
      showAside.firstElementChild.style.display = "grid";
      showAside.firstElementChild.style.animation =
        "fadeIn .2s ease-out forwards";
    } else {
      showAside.firstElementChild.style.animation =
        "fadeOut .2s ease-out forwards";
      this.setTimeout(() => {
        showAside.style.display = "none";
        showAside.firstElementChild.style.display = "none";
      }, 200);
    }
  }
  if (window.scrollY >= 600) {
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

/* Drop down menu showing */
// search.addEventListener("keyup", function (e) {
//   if (search.value.trim().length >= 3) {
//     searchMenu.style.display = "block";
//   } else {
//     searchMenu.style.display = "none";
//   }
//   document.addEventListener("click", function (e) {
//     var target = e.target;
//     if (target.id !== "#search__drop-down" && target.id !== "searchInput") {
//       searchMenu.style.display = "none";
//     }
//   });
// });
//
// searchMenuContent.innerHTML = `
//   <a href="#"><li>Popular</li></a>
//   <a href="#"><li>Finance</li></a>
//   <a href="#"><li>Freelance</li></a>
//   <a href="#"><li>Developer</li></a>
//   <a href="#"><li>For You</li></a>
// `;

const observer = new IntersectionObserver((e) => {
  e.forEach((el) => {
    if (el.isIntersecting) {
      el.target.classList.remove(".not_visible");
      el.target.classList.add("visible");
    } else {
      el.target.classList.remove(".not_visible");
      el.target.classList.add("visible");
    }
  });
});

const hiddenElements = document.querySelectorAll(".not_visible");
hiddenElements.forEach((e) => observer.observe(e));
