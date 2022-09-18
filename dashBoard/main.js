"use strict";

const fakeInput = document.getElementById("fake-input");
const imgInput = document.getElementById("changeImg");
fakeInput.addEventListener("click", (e) => {
  imgInput.click();
});
