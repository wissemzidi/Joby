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
        <!-- <input type="file" accept="image/*" id="changeImg"></input> -->
      </div>
      <div id="account__info">
        <h1><?= $user->username ?></h1>
        <h5><?= $user->email ?></h5>
        <hr style="margin-block: .5rem;">
        <p>
          <h4>number of work : 5</h4>
          <h4></h4>
        </p>
      </div>
    </header>
    <br>
    <main id="content">
      <div class="hero__title">
        <h2>Work</h2>
      </div>
      <div class="hero__cards">
        <ul class="cards">
          <li class="card card1">
            <div class="card__img">
              <img height="60" src="../project assets/svg/accont.svg" alt="" />
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
    </main>
  </main>

</body>
<script src="main.js"></script>

</html>