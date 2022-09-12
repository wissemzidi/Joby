<?php
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

}

function create_user($uid){
    $user = new User();
    $user->set_info($uid,"square","squar3dev@gmail.com",0);
    return $user;
}
$user = create_user(-1);
$logged_in = false;
if (isset($_SESSION['id'])){
    $user = create_user((int)$_SESSION['id']);
    $logged_in = true;
}


?>
