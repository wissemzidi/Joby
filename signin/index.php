<?php
    require '../conn.php';
    require '../funcs.php';
    if ($logged_in){ header("Location: /"); }
    $error_msg = "";
    if (isset($_POST['reg'])){
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $pwd  = isset($_POST['pwd']) ?  $_POST['pwd']  : "";
        $login_id = Login($conn,$name,$pwd);

        // Error messages
        $error_msg .= ($login_id === false) ? "Username or password incorrect!<br>" : "";
        
        // In case we don't have any errors
        if (strlen($error_msg) === 0){
            
            if ($login_id !== false){
                $_SESSION['id'] = $login_id;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="#" />
    <script src="main.js" defer></script>
    <title>Sign In</title>
  </head>
  <body>
    <div class="bg"></div>
    <div class="spinner"></div>
    <section id="page">
      <center><h2 id="login__header">Sign In</h2></center>
      <form id="login" method="POST">
        <a href="../index.html" id="return__btn">
          <img height="20" src="./icons/return.svg" alt=">" />
        </a>
        <div id="login__input">
          <div id="login__input__container">
            <label for="email__input" id="email__label">Name or Email</label>
            <input
              id="email__input"
              class=""
              title="Email"
              type="email"
              autocomplete="off"
            />
          </div>
          <div id="login__input__container">
            <label for="password__input" id="password__label">Password</label>
            <input
              title="Password"
              id="password__input"
              class=""
              type="password"
              autocomplete="off"
            />
            <span id="input__conditions">Minimum 8 characters</span>
          </div>
        </div>
        <div id="login__submit">
          <button id="login__submit__btn">Sign In</button>
        </div>
      </form>
    </section>
  </body>
</html>
