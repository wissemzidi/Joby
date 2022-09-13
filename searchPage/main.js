// Data
let users = {
  user0: {
    name: "Wissem",
    email: "wissem@gmail.com",
  },
  user1: {
    name: "Omar",
    email: "omar@gmail.com",
  },
  user2: {
    name: "sdf",
    email: "sdfezf@gmail.com",
  },
  user3: {
    name: "ahmeds",
    email: "room@gmail.com",
  },
  user4: {
    name: "Farah",
    email: "-->",
  },
  user5: {
    name: "Youssef",
    email: "ccccc@gmail.com",
  },
  user6: {
    name: "Ahmed",
    email: "ahmedwarteni@yahoo.com",
  },
  user7: {
    name: "Chehin",
    email: "chehinzakraoui.123@gmail.com",
  },
  user8: {
    name: "Hamdi",
    email: "Hamdi...@gmail.com",
  },
  user9: {
    name: "Hamza",
    email: "hamzazidi@gmail.com",
  },
};

// const
const searchInput = document.querySelector("#search__input");
const container = document.querySelector("#container");
const pageContentInnerHtml = (name, email, id) => {
  content = `
  <div id="${id}" class="inner">
    <div id="inner__txt">
      <h1>${name}</h1>
      <p>${email}</p>
    </div>
    <div id="inner__btn">
      <a href="${"../index.php"}" title="More">${"Join"}</a>
    </div>
  </div>`;
  return content;
};

if (localStorage["searchLink"]) {
  searchInput.value = `${localStorage["searchLink"]}`;
  localStorage.clear("searchLink");
}

// loop
for (let i = 0; i < Object.keys(users).length; i++) {
  // let user = users["user" + i];
  let user = users[`user${i}`];
  container.innerHTML += pageContentInnerHtml(user.name, user.email, i);
}

// listen
searchInput.addEventListener("keyup", (event) => {
  for (let i = 0; i < Object.keys(users).length; i++) {
    let user = users[`user${i}`];
    let chain = user.name + user.email;
    chain = chain.toLowerCase();
    if (!chain.includes(searchInput.value.toLowerCase())) {
      document.getElementById(i).style.display = "none";
    } else {
      document.getElementById(i).style.display = "flex";
    }
  }
});

// function
