<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Donate Food</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-page">

<div class="login-card">

<h2>🍱 Donate Food</h2>

<p>Fill in the food details below</p>

<form action="donate_process.php" method="POST" enctype="multipart/form-data">

<div class="input-box">
<input type="text" name="food_name" placeholder="Food Name" required>
</div>

<div class="input-box">
<input type="number" name="quantity" placeholder="Quantity" required>
</div>

<div class="input-box">
<input type="text" name="category" placeholder="Category" required>
</div>

<div class="input-box">
<input type="text" name="location" placeholder="Pickup Location" required>
</div>

<div class="input-box">
<label>Pickup Date & Time</label><br><br>
<input type="datetime-local" name="pickup_time" required>
</div>

<div class="input-box">
<label>Expiry Date & Time</label><br><br>
<input type="datetime-local" name="expiry_time" required>
</div>

<div class="input-box">
<label>Food Image</label><br><br>
<input type="file" name="food_image" required>
</div>

<button class="login-btn" type="submit">
Donate Food
</button>

</form>

<br>

<a class="home-link" href="dashboard.php">⬅ Back to Dashboard</a>

</div>

</div>

</body>
</html>