<?php
require_once "User.php";

//get the 
$user_id = $_GET['user_id'];

//create on object of class User
$user = new User;

//delete the user
$user->deleteUser($user_id);

?>