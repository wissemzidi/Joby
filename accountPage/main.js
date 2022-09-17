const interest = document.querySelector("#interest");

if (Boolean(window.localStorage["interestFocus"]) === true) {
  shine(interest);
  window.localStorage.removeItem("interestFocus");
}

function shine(e) {
  e.style.backgroundColor = "var(--clr-green-100)";
  setTimeout(() => {
    e.style.backgroundColor = "var(--clr-background)";
  }, 1000);
}

if (interest.value === "") {
  shine(interest);
}
