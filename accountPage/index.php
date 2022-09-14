<?php
  require '../conn.php';
  require '../funcs.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../project assets/logo/logo(light).svg">
    <link rel="stylesheet" href="style.css" />
    <title>Account</title>
  </head>
  <body>
    <main id="content">
      <center><h1 style="font-weight: 400; color: var(--clr-purple-100); font-family: var(--ff-netron);">Account</h1></center>
      <br />
      <header>
        <div id="account__img">
          <img height="100" src="./img/logo.jpg" alt="Img" />
          <input type="file" accept="image/*" id="changeImg"></input>
        </div>
        <div id="account__info">
          <h1><?=$user->username?></h1>
          <h5><?=$user->email?></h5>
          <select id="interest" name="interest" style="margin-top: 0.5rem; 
            background-color: transparent; 
            border: 1px rgba(0, 0, 0, 0.2) solid; 
            outline: none;">
            <option value="">Choose interest</option>
            <option value="graphic design">Graphic & Design</option>
            <option value="develop">Develop</option>
            <option value="architect">Architect</option>
            <option value="editing">Editing</option>
            <option value="business">Business</option>
            <option value="wordpress">WordPress</option>
            <option value="marketing">Marketing</option>
            <option value="music">Music & Audio</option>
            <option value="data">Data</option>
          </select>
        </div>
      </header>
      <br>
      <hr>
      <br>
      <section id="hero">
        <div id="inputs">
          <form action="../accountPage/" id="input" method="post">
            <label for="changeName">Change Name</label>
            <br>
            <input
              name="name"
              id="changeName"
              placeholder="username"
              value="<?=$user->username?>"
              type="text"
            />
            <button type="submit" name="chUser">Submit</button>
          </form>
          <br>
          <center>
            <h6>
            <?php  
              if(isset($_POST['chUser'])){
                $username = $_POST['name'];
                $error_msg = "";
                $error_msg .= (!verify_username($username)) ?                        "Invalid username format<br>" : "";
                $error_msg .= (!(strlen($username) <= 16 && strlen($username) >= 4)) ?   "Username length should be between 4 and 16<br>" : "";
                $error_msg .= (username_exists($conn,$username)) ?                   "Username already exists<br>" : "";
                if(strlen($error_msg)==0){
                  $user->change_data('username',$username);
                  exit(header("Location: /accountPage/?m=1"));
                }else{
                  echo '<p style="color:#900;">'. $error_msg .'</p>';
                }
              }
              elseif(isset($_GET['m']) && $_GET['m']==1){
                echo '<p style="color:#0A0;">username changed successfully</p><br>';
              }
            ?>
            </h6>
          </center>
          <form action="../accountPage/" id="input" method="post">
            <label for="changeEmail">Change Email</label>
            <br>
            <input
              name="email"
              id="changeEmail"
              placeholder="email@gmail.com"
              value="<?=$user->email?>"
              type="text"
              disabled
            />
            <button type="submit" >Submit</button>
          </form>
          <br>
          <hr>
          <br>
          <form action="../accountPage/" id="input" method="post">
            <h3 style="font-weight: 400;
            color: var(--clr-purple-100); 
            font-family: var(--ff-netron);
            text-align: center;">Change Password</h3>
            <br>
            <div id="inputs">
              <label for="currentPwd">Current password</label>
              <br>
              <input
                style="width: 90%;
                margin-inline: 1vw;"
                name="currentPwd"
                id="currentPwd"
                placeholder="Current Password"
                type="password"
              />
              <br />
              <br>
              <label for="newPwd">New password</label>
              <br />
              <input
                style="width: 90%;
                margin-inline: 1vw;"
                name="newPwd"
                id="newPwd"
                placeholder="New Password"
                type="password"
              />
              <br />
              <!-- <br> -->
              <!-- <label for="repeatPwd">Rewrite password</label>
              <br>
              <input
                style="width: 90%;
                margin-inline: 1vw;"
                name="repeatPwd"
                id="repeatPwd"
                placeholder="Password"
                type="password"
              /> -->
            </div>
            <br>
            <center>
              <button style="text-align: center;" type="submit" name="chPwd">Submit password</button>
            </center>
          </form>
          <br>
          <center>
          <?php
              if(isset($_POST['chPwd'])){
                $old_pwd = $_POST['currentPwd'];
                $pwd = $_POST['newPwd'];
                // $re_pwd = $_POST['repeatPwd'];

                $error_msg = "";
                $error_msg .= (!password_verify($old_pwd,get_user_info($conn,$user->id,'password'))) ? "Password Incorrect<br>" : "";
                $error_msg .= (!(strlen($pwd) >= 8)) ?                           "Password length should be more than 8<br>" : "";
                // $error_msg .= ($pwd != $re_pwd) ?                                "New passwords doesn't match<br>" : "";
                if(strlen($error_msg)==0){
                  $hashed_pwd = password_hash($pwd,PASSWORD_DEFAULT);
                  $user->change_data('password',$hashed_pwd);
                  exit(header("Location: /accountPage/?m=2"));
                }else{
                  echo '<p style="color:#900;">'. $error_msg .'</p><br>';
                }
              }
              elseif(isset($_GET['m']) && $_GET['m']==2){
                echo '<p style="color:#0A0;">password changed successfully</p><br>';
              }
            ?>
            </center>
        </div>
        <center>
          <form method="POST">
            <button style="text-align: center;" type="submit" name="logout">Logout</button>
          </form>
          <?php
            if(isset($_POST['logout'])){
              logout();
            }
          ?>
        </center>
      </section>
    </main>
  </body>
  <script src="./main.js"></script>
</html>
