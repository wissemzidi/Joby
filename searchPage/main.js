// const
const searchInput = document.querySelector("#search__input");
const submit = document.querySelector(".searchBtn");
const form = document.querySelector("form");
const container = document.querySelector("#container");
const like = document.querySelectorAll(".likes");
let starsImg = null;
let starsNb = null;
let starImgSrc = null;

if (localStorage["searchLink"]) {
  searchInput.value = `${localStorage["searchLink"]}`;
  localStorage.clear("searchLink");
}

window.addEventListener("click", (e) => {
  if (
    e.target.parentElement.classList.contains("likes") &&
    !e.target.parentElement.classList.contains("liked")
  ) {
    let like = e.target.parentElement;
    like.classList.toggle("liked");
    like.children[0].src = "../project assets/svg/heart(colored).svg";
    like.children[1].innerText = Number(like.children[1].innerText) + 1;
  } else if (
    e.target.parentElement.classList.contains("likes") &&
    e.target.parentElement.classList.contains("liked")
  ) {
    let like = e.target.parentElement;
    like.classList.toggle("liked");
    like.children[0].src = "../project assets/svg/heart.svg";
    like.children[1].innerText = Number(like.children[1].innerText) - 1;
  }
});

const pageContentInnerHtml = (
  name,
  mail,
  price,
  text,
  link,
  starsNb,
  starImgSrc,
  number
) => {
  starImgSrc = selectStars(starsNb);
  content = `
    <div class="card card${number}">
      <div class="card__img card${number}__img">
      </div>
      <div class="card__titles">
        <h1>${name}</h1>
        <h5>${mail}</h5>
      </div>
      <div class="card__text">
        <p>
          ${text}
        </p>
      </div>
      <div class="card__footer">
        <div class="likes">
          <img class="stars-img" width="80" src="${starImgSrc}" alt="">
        </div>
        <div class="contact__btn">
          <a href="${link}" title="More">See More</a>
        </div>
      </div>
      <hr>
      <center><div class="prices">
        <h6 style="font-weight: 300; font-size: .9rem; padding: .5em;">pricing : ${price}$</h6>
      </div></center>
      </div>
  `;
  return content;
};

for (let i = 0; i < 10; i++) {
  container.innerHTML += pageContentInnerHtml(
    "Wissem" /* name */,
    "WissemZidi@gmail.com" /* gmail */,
    "25" /* price */,
    "i will build for you a full responsive web site front-end." /* presentation paragraph */,
    "8" /* page link to see the offer */,
    "2" /* nb of stars */,
    i.toString /* not for you */
  );
}

// Function
function selectStars(starsNb) {
  let starImgSrc;
  switch (Number(starsNb)) {
    case 1:
      starImgSrc = "../project assets/svg/1 stars.svg";
      break;
    case 2:
      starImgSrc = "../project assets/svg/2 stars.svg";
      break;
    case 3:
      starImgSrc = "../project assets/svg/3 stars.svg";
      break;
    case 4:
      starImgSrc = "../project assets/svg/4 stars.svg";
      break;
    case 5:
      starImgSrc = "../project assets/svg/5 stars.svg";
      break;
  }
  return starImgSrc;
}
