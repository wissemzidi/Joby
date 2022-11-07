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
        settingsContent.style.animation = "fadeUp 0.4s ease-out forwards";
        break;
      case "Dashboard":
        removeAllPages();
        dashboardContent.removeAttribute("hidden");
        dashboardContent.style.animation = "fadeUp 0.4s ease-out forwards";
        break;
      case "Account":
        removeAllPages();
        accountContent.removeAttribute("hidden");
        accountContent.style.animation = "fadeUp 0.4s ease-out forwards";
        break;
      case "Home":
        removeAllPages();
        homeContent.removeAttribute("hidden");
        homeContent.style.animation = "fadeUp 0.4s ease-out forwards";
        break;
      case "Notifications":
        removeAllPages();
        notificationContent.removeAttribute("hidden");
        notificationContent.style.animation = "fadeUp 0.4s ease-out forwards";
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
const nav = document.querySelector("nav");

showAside.addEventListener("click", () => {
  let sideBarCurr = showAside.getAttribute("data-active");
  if (showAside.getAttribute("data-active") === "true") {
    showAside.setAttribute("data-active", false);
    sideBarText.forEach((ele) => {
      ele.style.animation = "fadeOut ease-out 0.3s";
    });
    setTimeout(() => {
      sideBarText.forEach((ele) => {
        ele.style.display = "none";
      });
    }, 200);
  } else {
    showAside.setAttribute("data-active", true);
    sideBarText.forEach((ele) => {
      ele.style.display = "block";
      ele.style.animation = "fadeIn ease-out 0.2s";
    });
  }
});

// if (window.localStorage["number-todo"] === undefined) {
//   window.localStorage.setItem("number-todo", 0);
// } else {
//   const numberTodo = window.localStorage.getItem("number-todo");
// }

function todoTemplate(text) {
  content = document.createElement("div");
  input = document.createElement("input");
  span = document.createElement("span");
  button = document.createElement("button");
  button.setAttribute("onclick", "removeTodo(this)");
  button.classList = "button delete-todo | ml-auto pr-10 pl-10";
  button.innerText = "Delete";
  span.className = "pl-10";
  span.innerText = text;
  input.setAttribute("type", "checkbox");
  input.className = "checkbox";
  input.style["--w"] = "10px";
  content.classList = "todo | p-10 pl-20 border-t d-flex align-c";
  content.append(input);
  content.append(span);
  content.append(button);
  console.log(content);
  return content;
}

const addTodoBtn = document.getElementById("add-todo");
const todoInput = document.getElementById("todo-input");
const deleteTodoBtns = document.querySelectorAll(".delete-todo");
const todoContainer = document.querySelector("#todo-container");
const numberTodo = document.getElementById("todo-number");

function removeTodo(btn) {
  btn.parentElement.remove();
  numberTodo.innerText--;
}

addTodoBtn.addEventListener("click", () => {
  let value = todoInput.value;
  let content = todoTemplate(value);
  todoContainer.append(content);
  todoInput.value = "";
  numberTodo.innerText++;
});
