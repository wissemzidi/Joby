<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <!-- card -->
        <div class="card card1">
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
        </div>
        <!--  -->
      </div>
    </main>
  </body>
  <script src="main.js"></script>
</html>
