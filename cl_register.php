<?php
    require 'conn.php';
    require 'funcs.php';
    if ($logged_in){ header("Location: /"); }
    $error_msg = "";
    if (isset($_POST['reg'])){
        $email = isset($_POST['mail']) ? $_POST['mail'] : "";
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $pwd  = isset($_POST['pwd']) ?  $_POST['pwd']  : "";
        $re_pwd  = isset($_POST['re_pwd']) ?  $_POST['re_pwd']  : "";

        // Error messages
        $error_msg .= (!verify_email($email)) ?                          "Email isn't valid<br>" : "";
        $error_msg .= (!verify_username($name)) ?                       "Only letters,numbers and _ are allowed in username<br>" : "";
        $error_msg .= (!(strlen($name) <= 16 && strlen($name) >= 4)) ?  "Username length should be between 4 and 16<br>" : "";
        $error_msg .= (!(strlen($pwd) <= 32 && strlen($pwd) >= 6)) ?    "Password length should be between 6 and 32<br>" : "";
        $error_msg .= (username_exists($conn,$name)) ?                  "Username already exists<br>" : "";
        $error_msg .= (email_exists($conn,$email)) ?                     "Email already exists<br>" : "";
        $error_msg .= ($pwd != $re_pwd) ?                               "Password doesn't match<br>" : "";
        
        // In case we don't have any errors
        if (strlen($error_msg) === 0){
            Register($conn,$name,$email,$pwd);
            $login_id = Login($conn,$name,$pwd);
            if ($login_id !== false){
                $_SESSION['id'] = $login_id;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST">
            <input name="mail" type="email" placeholder="email" required><br>
            <input name="name" type="text" placeholder="username" required><br>
            <input name="pwd" type="password" placeholder="password" required><br>
            <input name="re_pwd" type="password" placeholder="repeat password" required><br>
            <button type="submit" name="reg">Submit</button><br>
            <?php
                echo $error_msg;
            ?>
        </form>
</body>
</html>