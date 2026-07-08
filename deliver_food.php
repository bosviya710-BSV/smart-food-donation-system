<?php
include 'db.php';

$id = $_GET['id'];

$sql = "UPDATE food_donations SET status='Delivered' WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: volunteer_dashboard.php");
}else{
    echo "Error";
}
?>