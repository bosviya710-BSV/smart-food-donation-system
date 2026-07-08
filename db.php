<?php

$servername = "sql102.infinityfree.com";
$username = "if0_42363826";
$password = "kloHDjcbHj8d ";
$database = "if0_42363826_fooddonationshareweb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>