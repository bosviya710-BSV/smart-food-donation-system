<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $donor_name = $_SESSION['user'];
    $food_name = mysqli_real_escape_string($conn, $_POST['food_name']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $pickup_time = $_POST['pickup_time'];
    $expiry_time = $_POST['expiry_time'];

    $image = "";

    if(isset($_FILES['food_image']) && $_FILES['food_image']['error'] == 0){

        if(!is_dir("uploads")){
            mkdir("uploads", 0777, true);
        }

        $image = time() . "_" . basename($_FILES["food_image"]["name"]);
        move_uploaded_file($_FILES["food_image"]["tmp_name"], "uploads/" . $image);
    }

    $sql = "INSERT INTO food_donations
    (donor_name, food_name, quantity, category, location, pickup_time, expiry_time, image, status)
    VALUES
    ('$donor_name','$food_name','$quantity','$category','$location','$pickup_time','$expiry_time','$image','Available')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Food Donation Added Successfully');window.location='dashboard.php';</script>";
    } else {
        die("Database Error: " . mysqli_error($conn));
    }
}
?>