<?php
    require 'conn.php';
    require 'funcs.php';
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST">
            <input name="name" type="text" placeholder="email or username" required><br>
            <input name="pwd" type="password" placeholder="password" required><br>
            <button type="submit" name="reg">Submit</button><br>
            <?php
                echo $error_msg;
            ?>
        </form>
</body>
</html>