// default
const themeBtn = document.getElementById("theme");
document.body.setAttribute("data-theme", window.localStorage.getItem("theme"));
if (window.localStorage.getItem("theme") === "dark") {
  themeBtn.setAttribute("checked", "");
}
//
const toggleSwitch = document.querySelectorAll(".toggle-switch");
const toggleInput = document.querySelectorAll(".toggle-input");
// pages
const settingsContent = document.getElementById("settings-page");
const dashboardContent = document.getElementById("dashboard-page");
const accountContent = document.getElementById("account-page");
const homeContent = document.getElementById("home-page");
const notificationContent = document.getElementById("notifications-page");
const pages = document.querySelectorAll(".page");
//
const pageTitle = document.querySelector("#page-title");
const navBtns = document.querySelectorAll(".nav-btn");

function removeAllPages() {
  pages.forEach((page) => {
    page.setAttribute("hidden", "");
  });
}

navBtns.forEach((ele) => {
  ele.addEventListener("click", () => {
    pageTitle.textContent = ele.textContent;
    console.log(ele.textContent.trim());
    switch (ele.textContent.trim()) {
      case "Settings":
        removeAllPages();
        settingsContent.removeAttribute("hidden");
        break;
      case "Dashboard":
        removeAllPages();
        dashboardContent.removeAttribute("hidden");
        break;
      case "Account":
        removeAllPages();
        accountContent.removeAttribute("hidden");
        break;
      case "Home":
        removeAllPages();
        homeContent.removeAttribute("hidden");
        break;
      case "Notifications":
        removeAllPages();
        notificationContent.removeAttribute("hidden");
        break;
    }
  });
});

toggleSwitch.forEach((ele) => {
  ele.addEventListener("click", () => {
    ele.previousElementSibling.toggleAttribute("checked");
    if (themeBtn.hasAttribute("checked")) {
      window.localStorage.setItem("theme", "dark");
    } else {
      window.localStorage.setItem("theme", "light");
    }
  });
});

const showAside = document.querySelector("#show-full-aside");
const sideBarText = document.querySelectorAll(".hide-600");
let sideBarCurr = false;

showAside.addEventListener("click", () => {
  if (sideBarCurr) {
    sideBarCurr = false;
    sideBarText.forEach((ele) => {
      ele.style.display = "none";
    });
  } else {
    sideBarCurr = true;
    sideBarText.forEach((ele) => {
      ele.style.display = "block";
    });
  }
});
