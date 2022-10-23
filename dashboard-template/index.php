<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="framework.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Dashboard</title>
  </head>
  <body data-theme="light">
    <header>
      <center>
        <h1 id="page-title" class="fw-light fs-30 pb-30 pt-20">Settings</h1>
      </center>
    </header>
    <main>
      <nav id="aside" class="w-fit p-10 fw-light">
        <ul id="aside-list" class="no-list d-grid gap-10">
          <li class="nav-btn" class="nav-btn" id="settings-page-btn">
            <a href="#">
              <img
                width="20"
                class="op-min"
                src="./assets/svg/settings 2.0.svg"
                alt=">"
              />
              <span class="hide-600">Settings</span>
            </a>
          </li>
          <li class="nav-btn" id="dashboard-page-btn">
            <a href="#">
              <img width="20" src="./assets/svg/burger.svg" alt=">" />
              <span class="hide-600">Dashboard</span>
            </a>
          </li>
          <li class="nav-btn" id="account-page-btn">
            <a href="#">
              <img width="20" src="./assets/svg/accont.svg" alt=">" />
              <span class="hide-600">Account</span>
            </a>
          </li>
          <li class="nav-btn" id="notifications-page-btn">
            <a href="#">
              <img width="20" src="./assets/svg/notification.svg" alt=">" />
              <span class="hide-600">Notifications</span>
            </a>
          </li>
          <li id="home-page-btn">
            <a href="https://squar3.me">
              <img width="20" src="./assets/svg/home 2.0.svg" alt=">" />
              <span class="hide-600">Home</span>
            </a>
          </li>
          <li id="show-full-aside" data-active="false" class="show-600">
            <!--  class="show-600" -->
            <a href="#">
              <img
                width="20"
                class="op-min"
                src="./assets/svg/right arrow.svg"
                alt=">"
              />
              <span class="hide-600">Hide</span>
            </a>
          </li>
        </ul>
      </nav>
      <section class="page" id="settings-page" style="width: 100%">
        <form id="content" class="pr-20 pl-20" method="get">
          <article
            id="privacy-box"
            class="border-l bg-l-gray rad-20 p-20 pt-10"
          >
            <h2 class="txt-c fw-light pb-10">Privacy</h2>
            <div class="pb-10 pt-10">
              number of devices with this account :
              <span class="c-white bg-gray fw-light rad-50 pr-10 pl-10">5</span>
            </div>
            <div class="pb-10 pt-10 border-t d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px"> Show phone number </span>
              <input
                class="toggle-input"
                type="checkbox"
                name="show-tel"
                hidden
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
            <div class="pt-10 border-t d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px"> Show Email </span>
              <input
                class="toggle-input"
                type="checkbox"
                name="show-mail"
                hidden
                checked
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
          </article>
          <article
            id="privacy-box"
            class="border-l bg-l-gray rad-20 p-20 pt-10"
          >
            <h2 class="txt-c fw-light pb-10">Appearance</h2>
            <div class="pb-10 pt-10">
              current theme :
              <span class="c-white bg-gray rad-50 pr-10 pl-10">Light</span>
            </div>
            <div class="pb-10 pt-10 border-t d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px"> Dark theme </span>
              <input
                id="theme"
                class="toggle-input"
                type="checkbox"
                name="dark-theme"
                hidden
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
            <div class="pt-10 pb-10 border-t d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px"> Hide main page </span>
              <input
                class="toggle-input"
                type="checkbox"
                name="hide-main"
                hidden
                checked
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
            <div class="pt-10 border-t d-flex align-c justify-sb gap-20">
              <label for="font-size" class="fs-14">change font size : </label>
              <select name="font-size" id="font-size" class="select-input">
                <option selected value="mid">Medium (Recommended)</option>
                <option value="min">Minimum</option>
                <option value="max">Maximum</option>
              </select>
            </div>
          </article>
          <article
            id="privacy-box"
            class="border-l bg-l-gray rad-20 p-20 pt-10"
          >
            <h2 class="txt-c fw-light pb-10">Policy</h2>
            <div class="pb-10 pt-10 d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px"> MIT license </span>
              <input
                class="toggle-input"
                type="checkbox"
                name="license"
                hidden
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
            <center class="border-t pt-10">
              <span class="op-min">
                Permission is hereby granted, free of charge, to any person
                obtaining a copy of this software and associated documentation
                files (the "Software"), to deal in the Software without
                restriction, including without limitation the rights to use,
                copy, modify, merge, publish, distribute, sublicense, and/or
                sell copies of the Software, and to permit persons to whom the
                Software is furnished to do so,
              </span>
            </center>
          </article>
          <article
            id="privacy-box"
            class="border-l bg-l-gray rad-20 p-20 pt-10"
          >
            <h2 class="txt-c fw-light pb-10">Payment</h2>
            <div class="pb-10 pt-10">
              current way :
              <span class="c-white bg-gray rad-50 pr-10 pl-10">PayPal</span>
            </div>
            <div class="pb-10 pt-10 border-t d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px">show payment method</span>
              <input
                class="toggle-input"
                type="checkbox"
                name="dark-theme"
                hidden
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
            <div class="pb-10 pt-10 border-t d-flex align-c justify-sb gap-20">
              <label for="font-size" class="fs-14">change Payment method</label>
              <select name="font-size" id="font-size" class="select-input">
                <option selected value="mid">PayPal</option>
                <option value="min">Master Card</option>
                <option value="max">Visa</option>
                <option value="max">Ali pay</option>
              </select>
            </div>
            <center class="pt-10 border-t">
              <span class="op-min">
                All your banking info and transactions info are safe
              </span>
            </center>
          </article>
          <div id="submit-btn-container" class="pt-30 d-flex">
            <button
              id="submit-btn"
              class="p-10 pr-20 pl-20 bg-gray c-white rad-50"
              type="submit"
            >
              Save changes
            </button>
          </div>
        </form>
      </section>
      <section class="page" id="dashboard-page" style="width: 100%" hidden>
        <form id="content" class="pr-20 pl-20" method="get">
          <article
            id="privacy-box"
            class="border-l bg-l-gray rad-20 p-20 pt-10"
          >
            <h2 class="txt-c fw-light pb-10">current work</h2>
            <div class="pb-10 pt-10">
              number of work :
              <span class="c-back bg-gray fw-light rad-20 pr-10 pl-10">5</span>
            </div>
            <div class="pb-10 pt-10 border-t d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px"> Are you busy ? </span>
              <input
                class="toggle-input"
                type="checkbox"
                name="show-tel"
                hidden
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
            <div class="pt-10 border-t d-flex align-c justify-sb gap-20">
              <span style="letter-spacing: -0.5px">
                Do you accept more work ?
              </span>
              <input
                class="toggle-input"
                type="checkbox"
                name="show-mail"
                hidden
                checked
              />
              <div class="toggle-switch">
                <div class="toggle-switch_inner"></div>
              </div>
            </div>
          </article>
          <article
            id="privacy-box"
            class="border-l bg-l-gray rad-20 p-20 pt-10"
          >
            <h2 class="txt-c fw-light pb-10">Todo_today</h2>
            <div class="pb-10 pt-10 d-flex justify-sb align-c">
              <div>
                <span>Todo :</span>
                <span
                  id="todo-number"
                  class="c-back bg-gray rad-20 pr-10 pl-10"
                >
                  0
                </span>
              </div>
              <div class="d-flex gap-10">
                <input id="todo-input" class="input pr-10 pl-10" type="text" />
                <button id="add-todo" class="button pr-20 pl-20">Add</button>
              </div>
            </div>
            <div id="todo-container"></div>
          </article>
          <article id="work-box" class="border-l rad-20 p-20 pt-10">
            <h2 class="txt-c fw-light pb-10">Work</h2>
            <div class="pb-10 pt-10">
              number of work :
              <span class="c-white bg-gray rad-50 pr-10 pl-10">6</span>
            </div>
            <div
              id="works-box"
              class="border-t pt-10 pb-10 d-flex flex-w gap-30 justify-c"
            >
              <div class="work-box | p-20 rad-10 gap-20">
                <div class="d-flex justify-sb">
                  <button class="p-5 border bg-gray c-back rad-50 point">
                    Done
                  </button>
                  <div>
                    <a
                      class="d-flex justify-c gap-10 border p-5 rad-50 ml-auto"
                      href=""
                    >
                      <span class="op-mid fs-14">Wissem Zidi</span>
                      <img
                        class="bg-white rad-50"
                        height="20"
                        src="./assets/svg/accont.svg"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="d-grid justify-c">
                  <span class="fs-16">
                    Hello, i want a two page website for my little company i
                    want it to bee minimalistique.
                  </span>
                </div>
                <div
                  class="border-t pt-20 pb-10 d-flex justify-c align-c gap-10"
                >
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    website
                  </span>
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    2 pages
                  </span>
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    Base offer
                  </span>
                </div>
              </div>
              <div class="work-box | p-20 rad-10 gap-20">
                <div class="d-flex justify-sb">
                  <button class="p-5 border bg-gray c-back rad-50 point">
                    Done
                  </button>
                  <div>
                    <a
                      class="d-flex justify-c gap-10 border p-5 rad-50 ml-auto"
                      href=""
                    >
                      <span class="op-mid fs-14">Wissem Zidi</span>
                      <img
                        class="bg-white rad-50"
                        height="20"
                        src="./assets/svg/accont.svg"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="d-grid justify-c">
                  <span class="fs-16">
                    Hello, i want a two page website for my little company i
                    want it to bee minimalistique.
                  </span>
                </div>
                <div
                  class="border-t pt-20 pb-10 d-flex justify-c align-c gap-10"
                >
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    website
                  </span>
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    2 pages
                  </span>
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    Base offer
                  </span>
                </div>
              </div>
              <div class="work-box | p-20 rad-10 gap-20">
                <div class="d-flex justify-sb">
                  <button class="p-5 border bg-gray c-back rad-50 point">
                    Done
                  </button>
                  <div>
                    <a
                      class="d-flex justify-c gap-10 border p-5 rad-50 ml-auto"
                      href=""
                    >
                      <span class="op-mid fs-14">Wissem Zidi</span>
                      <img
                        class="bg-white rad-50"
                        height="20"
                        src="./assets/svg/accont.svg"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="d-grid justify-c">
                  <span class="fs-16">
                    Hello, i want a two page website for my little company i
                    want it to bee minimalistique.
                  </span>
                </div>
                <div
                  class="border-t pt-20 pb-10 d-flex justify-c align-c gap-10"
                >
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    website
                  </span>
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    2 pages
                  </span>
                  <span
                    class="c-l-gray p-5 pr-10 pl-10 rad-50 op-mid c-back bg-black fw-light fs-13"
                  >
                    Base offer
                  </span>
                </div>
              </div>
            </div>
          </article>
          <div id="submit-btn-container" class="pt-30 d-flex">
            <button
              id="submit-btn"
              class="p-10 pr-20 pl-20 bg-gray c-white rad-50"
              type="submit"
            >
              Save changes
            </button>
          </div>
        </form>
      </section>
      <section class="page" id="account-page" style="width: 100%" hidden>
        <form
          class="change-name-form d-grid gap-20 justify-c mr-30"
          method="post"
        >
          <input
            class="text-input"
            type="text"
            name="name"
            id=""
            placeholder="New name"
          />
          <input
            class="text-input"
            autocomplete="off"
            type="password"
            name="pwd"
            id=""
            placeholder="New password"
          />
          <input
            class="text-input"
            type="email"
            name="mail"
            id=""
            placeholder="New email"
          />
          <input
            class="text-input"
            type="tel"
            name="num"
            id=""
            placeholder="New phone number"
          />
          <input
            class="text-input"
            type="datetime"
            name="dns"
            id=""
            placeholder="dd / mm / yyyy"
          />
          <br />
          <div class="d-flex align-c justify-sb p-t-10">
            <button class="submit-btn" type="submit">Submit</button>
          </div>
        </form>
      </section>
      <section class="page" id="notifications-page" style="width: 100%" hidden>
        <form id="content" class="pr-20 pl-20" method="get">
          <article id="notifications-box" class="border-l rad-20 p-20 pt-10">
            <h2 class="txt-c fw-light pb-10">Your Inbox</h2>
            <div class="pb-10 pt-10">
              number notifications :
              <span class="c-font border fw-light rad-50 pr-10 pl-10">
                10
              </span>
            </div>
            <div id="notifications" class="d-flex flex-w gap-10">
              <div class="notification border rad-10 p-5 pt-10 pb-10">
                <div class="d-flex justify-sb p-5">
                  <span class="op-mid fs-12 p-5 rad-10">From Wissem Zidi</span>
                  <span class="op-min fs-10 border p-5 rad-50">5 min</span>
                </div>
                <div class="border-t pt-20 pb-10 justify-c d-grid">
                  <p>hello this is your spy</p>
                </div>
              </div>
              <div class="notification border rad-10 p-5 pt-10 pb-10">
                <div class="d-flex justify-sb p-5">
                  <span class="op-mid fs-12 p-5 rad-10">From Wissem Zidi</span>
                  <span class="op-min fs-10 border p-5 rad-50">5 min</span>
                </div>
                <div class="border-t pt-20 pb-10 justify-c d-grid">
                  <p>hello this is your spy</p>
                </div>
              </div>
              <div class="notification border rad-10 p-5 pt-10 pb-10">
                <div class="d-flex justify-sb p-5">
                  <span class="op-mid fs-12 p-5 rad-10">From Wissem Zidi</span>
                  <span class="op-min fs-10 border p-5 rad-50">5 min</span>
                </div>
                <div class="border-t pt-20 pb-10 justify-c d-grid">
                  <p>hello this is your spy</p>
                </div>
              </div>
            </div>
          </article>
        </form>
      </section>
    </main>
    <footer>
      <div>
        <center>
          <span class="op-mid fs-14 fw-light">
            All right are saved Joby 2022
          </span>
        </center>
      </div>
    </footer>
  </body>
  <script src="main.js"></script>
</html>
