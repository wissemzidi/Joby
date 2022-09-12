// Data
let users = {
  user0: {
    name: "Wissem",
    email: "wissem.zidi.ofc@gmail.com",
  },
  user1: {
    name: "Omar",
    email: "omarzidi25@gmail.com",
  },
  user2: {
    name: "Kamel",
    email: "kamell.zidii@gmail.com",
  },
  user3: {
    name: "Nabiha",
    email: "nabihakhmissi55@gmail.com",
  },
  user4: {
    name: "Farah",
    email: "-->",
  },
  user5: {
    name: "Youssef",
    email: "youssefbensalah@gmail.com",
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
    email: "hamza.zidi@gmail.com",
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
      <a href="#" title="More">More</a>
    </div>
  </div>`;
  return content;
};

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
