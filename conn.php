<?php
ini_set('display_errors', '1');ini_set('display_startup_errors', '1');error_reporting(E_ALL);
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$server = "localhost";
$username = "root";
$password = "";
$db = "joby";
$conn = new mysqli($server, $username, $password,$db) or die("ERROR #0001");

class User {
    public $id = 0;
    public $username = "";
    public $email = "";
    public $perms = 0;

    function isAdmin(){
        return ($this->perms >= 3) ? true : false;
    }


    function set_info($_id,$_username,$_email,$_perms){
        $this->id = $_id;
        $this->username = $_username;
        $this->email = $_email;
        $this->perms = $_perms;
    }

    function change_data($column_name,$new_data){
        global $conn;
        // PLEASE DON'T SEND column_name WITHOUT VERIFICATIONS IT'S NOT PROTECTED AGAINST SQLI 
        $query = "UPDATE users SET {$column_name}=? WHERE id=?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$query);
        mysqli_stmt_bind_param($stmt,"si",$new_data, $this->id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    function get_data(){
        global $conn;

        $query = "SELECT * FROM users WHERE id = ?;";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $this->id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_fetch_assoc($result);
        $row = ($result->num_rows > 0) ? $row : null ;
        $stmt->close();
        return $row;
    }
    
    function get_data_row($column_name){
        global $conn;

        $query = "SELECT * FROM users WHERE id = ?;";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $this->id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_fetch_assoc($result);
        $info = ($result->num_rows > 0) ? $row[$column_name] : null ;
        $stmt->close();
        return $info;
    }

}

function create_user($uid){
    global $conn;
    $user = new User();
    $user->set_info(
        $uid,
        get_user_info($conn,$uid,"username"),
        get_user_info($conn,$uid,"email"),
        get_user_info($conn,$uid,"access")
    );
    return $user;
}

function get_user_info($conn,$uid,$info){
    $query = "SELECT * FROM users WHERE id = ?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);
    $info = ($result->num_rows > 0) ? $row[$info] : 1 ;
    $stmt->close();
    return $info;
}

function logout_user(){
    session_destroy();
    return -1;
}

$user = create_user(-1);
$logged_in = false;

if (isset($_SESSION['id'])){
    $user = create_user((int)$_SESSION['id']);
    $logged_in = true;
}


?>
