<?php
function verify_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function verify_username($user){
    return (bool)preg_match("/^[a-zA-Z0-9_ #]*$/",$user);
}

function username_exists($conn,$user){
    $query = "SELECT * FROM users WHERE username = ?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    $x = $result->num_rows > 0;
    $stmt->close();
    return $x;
}

function email_exists($conn,$mail){
    $query = "SELECT * FROM users WHERE email = ?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $result = $stmt->get_result();
    $x = $result->num_rows > 0;
    $stmt->close();
    return $x;
}

function Register($conn,$name,$email,$pwd){
    $query = "INSERT INTO users(username,email,password) VALUES(?,?,?);";
    $stmt = $conn->prepare($query);
    $hashed_pwd = password_hash($pwd,PASSWORD_DEFAULT);
    $stmt->bind_param("sss", $name,$email,$hashed_pwd);
    $stmt->execute();
    $stmt->close();
}

function Login($conn,$uname,$pwd){
    $query = "SELECT * FROM users WHERE email = ? OR username = ?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $uname,$uname);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);
    $hashed_pwd = ($result->num_rows === 0) ? "" : $row['password'];
    $stmt->close();
    return ($result->num_rows === 0 || !password_verify($pwd,$hashed_pwd)) ? false : $row['id'];
}

function logout(){
    session_destroy();
    exit(header("Location: /"));
    return -1;
}
?>