<!-- DB connect -->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "blog_db";
/* Attempt to connect to MySQL database */
$mysqli = new mysqli($host, $user, $pass, $db);
// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
