// const
const searchInput = document.querySelector("#search__input");
const submit = document.querySelector(".searchBtn");
const form = document.querySelector("form");
const container = document.querySelector("#container");
const like = document.querySelectorAll(".likes");

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
  likes,
  number,
  is_liked
) => {
  let svgLink = "../project assets/svg/heart.svg";
  if (is_liked) {
    svgLink = "../project assets/svg/heart(colored).svg";
    is_liked = "liked";
  } else {
    is_liked = "";
  }
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
        <div class="likes ${is_liked}">
          <img class="like__btn" height="25" src="${svgLink}" alt="">
          <h6>${likes}</h6>
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
    "Wissem",
    "WissemZidi@gmail.com",
    "25",
    "i will build for you a full responsive web site front-end.",
    "8",
    "5",
    i.toString,
    true
  );
}

// function
