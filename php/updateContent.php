<?php
$id = $_POST["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "druplicate";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "UPDATE content SET content = '$_POST[post_contents]' WHERE content.id = '$id'";
$result = $conn->query($sql);
$conn->close();
header("location:javascript://history.go(-1)");
?>
