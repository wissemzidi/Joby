<?php
  require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Main page/style.css" />
    <link rel="stylesheet" href="./Main page/media.css" />
    <link rel="icon" type="image/x-icon" href="./project assets/logo/logo(light).svg">
    <title>Joby</title>
  </head>
  <body>
    <!-- 
      scroll to top
    -->
    <button id="toTop">
      <img height="25" src="./project assets/svg/top.svg" alt="" />
    </button>
    <!-- 
      
      
      side bar -->
    <aside class="close" id="side-bar">
      <div id="side-bar__inner">
        <div id="side-bar__header">
          <h3 id="title">
            <a href="<?php echo ($logged_in)? "./accountPage/" : "./signin/";  ?>" id="login">
              <img
                title="Account"
                src="./project assets/svg/accont.svg"
                height="30"
                alt=""
              />
              <h6 style="font-size: 0.8rem; text-align: center;">
              <?php
                  echo ($logged_in)? $user->username : "Login";
              ?>
              </h6>
            </a>
          </h3>
          <button id="hideSideBar">
            <img height="25" src="./project assets/svg/exit.svg" alt="x" />
          </button>
        </div>
        <div id="side-bar__content">
          <ul>
            <li>
              <a href="./accountPage/index.php">Set interests</a>
            </li>
            <li>
              <a class="goToSearch" href="./searchPage/index.php">Freelance</a>
            </li>
            <li>
              <a class="goToSearch" href="./searchPage/index.php">Popular</a>
            </li>
            <li>
              <a class="goToSearch" href="#page4" onclick="hideAside.click()">About Us</a>
            </li>
            <li>
              <a href="https://github.com/Wissem-Zidi/Joby">Source Code</a>
            </li>
          </ul>
        </div>
      </div>
    </aside>

    <!-- 






    main-->
    <main id="content">
      <section id="hero">
        <header id="header" class="not_visible">
          <button id="showSideBar">
            <img
              title="side Bar"
              id="showAsideImg"
              src="./project assets/svg/burger.svg"
              height="25"
              alt=">"
            />
          </button>
          <h2 id="title">Joby</h2>
          <a href="<?php echo ($logged_in)? "./accountPage/" : "./signin/";  ?>" id="login">
            <img
              title="Account"
              src="./project assets/svg/accont.svg"
              height="30"
              alt=""
            />
            <h6>
            <?php
                  echo ($logged_in)? $user->username : "Login";
            ?>
            </h6>
          </a>
          <div id="searchBar">
            <input
              title="minimum 3 characters"
              id="searchInput"
              placeholder="search"
              type="search"
              autocomplete="off"
            />
            <button type="submit" id="searchBtn" onclick="window.location.href = './searchPage/index.php'">
              <img
                title="search"
                height="15"
                src="./project assets/svg/search.svg"
                alt="Submit"
              />
            </button>
            <!-- <div id="search__drop-down">
              <ul id="search__Menu__content"></ul>
            </div> -->
          </div>
          <div id="navigation">
            <ul id="navigation__ul">
              <li><a href="#">Info</a></li>
              <li><a href="#">About-us</a></li>
              <li><a href="#">Contact</a></li>
              <li>
                <a id="login-wide-screen" href="<?php echo ($logged_in)? "./accountPage/" : "./signin/";  ?>">
                  <?php
                    echo ($logged_in)? $user->username : "Login";
                  ?>
                </a>
              </li>
            </ul>
          </div>
        </header>
        <section id="hero-content">
          <div class="not_visible">
            <p id="hero__p">
              <span id="hero__p__title">Joby</span> Your Way to find a Job
              <br />
              <br />
              <a id="hero__join" href="./signup/index.php">Join Now</a>
            </p>
            <div id="hero__suggestions">
              <ul>
                <li><a class="goToSearch" href="./searchPage/index.php">Freelance</a></li>
                <li><a class="goToSearch" href="./searchPage/index.php">Back-end</a></li>
                <li><a class="goToSearch" href="./searchPage/index.php">Designer</a></li>
                <li><a class="goToSearch" href="./searchPage/index.php">Front-end</a></li>
              </ul>
            </div>
          </div>
          <div>
            <div id="hero__img" class="not_visible">
              <img src="./project assets/img/hero-illustration.svg" alt="" />
            </div>
          </div>
        </section>
      </section>

      <!-- 
        



      page2-->
      <section id="page2" class="not_visible">
        <h2>Find Your interest</h2>
        <div id="page2__cards">
          <a class="card goToSearch" href="./searchPage/index.php">
            <h5>Editing</h5>
          </a>
          <a class="card goToSearch" href="./searchPage/index.php">
            <h5>Architecture</h5>
          </a>
          <a class="card goToSearch" href="./searchPage/index.php">
            <h5>Designer</h5>
          </a>
          <a class="card goToSearch" href="./searchPage/index.php">
            <h5>Developer</h5>
          </a>
          <a class="card goToSearch" href="./searchPage/index.php">
            <h5>healthcare</h5>
          </a>
          <a class="card goToSearch" href="./searchPage/index.php">
            <h5>Cyber security</h5>
          </a>
        </div>
      </section>
      <!-- 





      Page3-->
      <section id="page3" class="not_visible">
        <div>
          <center><h4 style="font-size: 1.5rem; font-family: var(--ff-netron)">Clients Opinion</h4></center>
        </div>
        <br>
        <div id="p3__cards__container">
          <ul class="p3__cards">
            <li class="card card1">
              <div class="card__img">
                <img height="60" src="./project assets/img/client1.jpg" alt="" />
              </div>
              <h4 class="card__title">Jamie</h4>
              <p class="card__text">
                Im thankful to Joby. Now i have a job at Netflix.
              </p>
              <div class="p3__card__stars">
                <img width="80" src="./project assets/svg/5 stars.svg" alt="">
              </div>
            </li>
            <li class="card card2">
              <div class="card__img">
                <img height="60" src="./project assets/img/client2.jpg" alt="" />
              </div>
              <h4 class="card__title">Jackson</h4>
              <p class="card__text">
                I have been searching for a job sins 2020, and now i had one.
              </p>
              <div class="p3__card__stars">
                <img width="80" src="./project assets/svg/5 stars.svg" alt="">
              </div>
            </li>
            <li class="card card3">
              <div class="card__img">
                <img height="60" src="./project assets/img/client3.jpg" alt="" />
              </div>
              <h4 class="card__title">Jane</h4>
              <p class="card__text">
                It is a very good website But i there are no clients center to contact it.
              </p>
              <div class="p3__card__stars">
                <img width="80" src="./project assets/svg/4 stars.svg" alt="">
              </div>
            </li>
            <li class="card card4">
              <div class="card__img">
                <img height="60" src="./project assets/svg/accont.svg" alt="" />
              </div>
              <h4 class="card__title">Anna</h4>
              <p class="card__text">
                Not a bad idea, But i think you can make it more powerful and useful.
              </p>
              <div class="p3__card__stars">
                <img width="80" src="./project assets/svg/3 stars.svg" alt="">
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- 







      -->
      <section id="page4" class="full-bleed not_visible">
        <div id="p4__content">
          <h2>About-Us</h2>
          <div id="p4__text">
            <p>
              <span>Hello</span>, I'm
              <a href="https://wissem-zidi-ofc.netlify.app">Wissem Zidi</a>, I'm
              a junior <span>Front-end</span> developer.
            </p>
            <p>
              <span>Hello</span>, I'm <a href="">Hdr Ayoub</a>, I'm a senior
              <span>Back-end</span> developer.
            </p>
            <p>
              We are the team that build this website. Because we know that
              finding a job is not an easy thing those days so we build this
              website to help you find a job.
            </p>
          </div>
        </div>
      </section>
      <!-- 







      -->
      <footer id="footer" class="not_visible">
        <div class="footer-dark full-bleed">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-3 item">
                <h3>Team</h3>
                <ul>
                  <li><a href="#">Front-end developer</a></li>
                  <li><a href="#">Back-end developer</a></li>
                  <li><a href="#">Github</a></li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-3 item">
                <h3>About</h3>
                <ul>
                  <li><a href="#">Project</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Resources</a></li>
                </ul>
              </div>
              <div class="col-md-6 item text">
                <h3 style="font-family: var(--ff-netron)">Joby</h3>
                <p>
                  Joby is an open-source project for finding jobs. It can
                  automate some aspects of your job hunt by providing you with a
                  list of jobs from over 8,000 sources and filtering those jobs
                  based on location, employer, and pay.
                </p>
              </div>
              <div class="col item social">
                <a href="#"
                  ><img
                    height="30"
                    src="./project assets/svg/facebook.svg"
                    alt=""
                /></a>
                <a href="#">
                  <img
                    height="30"
                    src="./project assets/svg/instagram.svg"
                    alt=""
                  />
                </a>
                <a href="#">
                  <img
                    height="30"
                    src="./project assets/svg/email.svg"
                    alt=""
                  />
                </a>
                <a href="https://github.com/Wissem-Zidi/Joby">
                  <img
                    height="30"
                    src="./project assets/svg/github.svg"
                    alt=""
                  />
                </a>
              </div>
            </div>
            <p class="copyright">Joby © 2022</p>
          </div>
        </div>
      </footer>
    </main>
  </body>
  <script src="./Main page/main.js"></script>
</html>
