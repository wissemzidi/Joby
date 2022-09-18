<?php
require '../conn.php';
require '../funcs.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Dash Board</title>
</head>

<body>

  <main>
    <header>
      <div id="account__img">
        <img height="100" src="../accountPage/img/logo.jpg" alt="Img" />
        <input id="changeImg" style="display: none;" type="file" accept="image/*"></input>
        <div id="fake-input">Change Photo</div>
      </div>
      <div id="account__info">
        <h1><?= $user->username ?></h1>
        <h5><?= $user->email ?></h5>
        <hr style="margin-block: .5rem;">
        <p>
        <h4>number of work : 5</h4>
        <h4>Other info</h4>
        </p>
      </div>
    </header>
    <main id="content">
      <br>
      <div class="hero__title">
        <h2>Work</h2>
      </div>
      <div class="hero__cards">
        <ul class="cards">
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/img/client3.jpg" alt="" />
              <input value="0" type="range" min="0" max="3">
            </div>
            <h4 class="card__title">Anna</h4>
            <p class="card__text">
              Not a bad idea, But i think you can make it more powerful and useful.
            </p>
          </li>
          <!--  -->
          <!-- card template -->
        </ul>
      </div>
    </main>
  </main>

</body>
<script src="main.js"></script>

</html>