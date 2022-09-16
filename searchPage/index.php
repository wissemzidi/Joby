<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../project assets/logo/logo(light).svg">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="style.css" />
    <title>Learning js</title>
  </head>
  <body>
    <main>
      <form id="form" method="POST" action="" onsubmit="return false">
        <div class="search">
          <input
            type="text"
            name="search__input"
            id="search__input"
            placeholder="Search"
          />
          <button class="searchBtn" type="submit">
            <img height="25" src="../project assets/svg/search.svg" alt="" />
          </button>
        </div>
      </form>
      <div id="container">
        <!-- card template -->
        <!-- <div class="card card1">
          <div class="card__img card1__img">
          </div>
          <div class="card__titles">
            <h1>Name</h1>
            <h5>Email</h5>
          </div>
          <div class="card__text">
            <p>
              I will do a responsive web site to you.
            </p>
          </div>
          <div class="card__footer">
            <div class="likes">
              <img class="like__btn" height="25" src="../project assets/svg/heart.svg" alt="">
              <h6>5</h6>
            </div>
            <div class="contact__btn">
              <a href="#" title="More">See More</a>
            </div>
          </div>
          <hr>
          <center><div class="prices">
            <h6 style="font-weight: 300; font-size: .9rem; padding: .5em;">pricing : 23$</h6>
          </div></center>
        </div> -->
        <!-- end of card template -->
      </div>

      <!-- 





      footer -->
      <footer id="footer">
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
                    src="../project assets/svg/facebook.svg"
                    alt=""
                /></a>
                <a href="#">
                  <img
                    height="30"
                    src="../project assets/svg/instagram.svg"
                    alt=""
                  />
                </a>
                <a href="#">
                  <img
                    height="30"
                    src="../project assets/svg/email.svg"
                    alt=""
                  />
                </a>
                <a href="https://github.com/Wissem-Zidi/Joby">
                  <img
                    height="30"
                    src="../project assets/svg/github.svg"
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
  <script src="main.js"></script>
</html>
