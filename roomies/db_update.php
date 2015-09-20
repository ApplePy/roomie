<?php
session_start();

require_once "database_connect.php";

$database = initializeDatabase("roomies");

$user_id = $_SESSION["facebook"];
$cleanliness = $_POST["optradio"];
$noise_level = $_POST["optradio1"];
$gender = $_POST["optradio2"];
$preferred_gender = $_POST["optradio3"];

$database->query("UPDATE users SET cleanliness=$cleanliness, noise_level=$noise_level, gender=\"$gender\", preferred_gender=\"$preferred_gender\" WHERE user_id=$user_id;");

header ("Location: prep.php");
?>