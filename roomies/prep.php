<?php
session_start();

require_once "database_connect.php";

$database = initializeDatabase("roomies");

$id = $_SESSION["facebook"];

//Place the data to be processed inside of scratchpad, and signal ready.
/*try {
	$database->query("INSERT INTO scratchpad VALUES (DEFAULT, 1, $id, DEFAULT, DEFAULT);");
} catch (Exception $e) {
	echo "Message: " . $e->getMessage();
	exit;
}*/


// New imagining of David Wu's algorithm

$subject = $database->query("SELECT * FROM users WHERE user_id=$id")->fetch();
$genPrefs = $subject["preferred_gender"];
$clean = $subject["cleanliness"];
$quiet = $subject["noise_level"];


$results = $database->query ("SELECT user_id FROM users WHERE gender = \"$genPrefs\" AND noise_level BETWEEN ($quiet - 1) AND ($quiet + 1) AND cleanliness BETWEEN ($clean-1) AND ($clean+1);");


$_POST["comma_uid_list"] = "";


for ($counter = 0; $counter < count($results->fetchAll()); $counter++) {
	$_POST["comma_uid_list"] .= $results->fetchAll()[$counter] . ',';
}

//Wait for data to be ready, grab it, and then mark it done.
/*$result = $database->query("SELECT list FROM scratchpad WHERE algorithm_ready=1;");
while ($result->rowCount() == 0) {
	usleep(1000);
	$result = $database->query("SELECT list FROM scratchpad WHERE algorithm_ready=1;"); 
}
$_POST["comma_uid_list"] = $result->fetch()[0];
$database->query("DELETE FROM scratchpad WHERE algorithm_ready=1;");*/


header("Location: match.php");

?>