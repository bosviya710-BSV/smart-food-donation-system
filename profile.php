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
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

<div class="login-card">

<h2>👤 My Profile</h2>

<p><strong>Name</strong></p>

<div class="input-box">
<input type="text" value="<?php echo $_SESSION['user']; ?>" readonly>
</div>

<p><strong>Role</strong></p>

<div class="input-box">
<input type="text" value="<?php echo $_SESSION['role']; ?>" readonly>
</div>

<a href="dashboard.php">
<button class="login-btn">⬅ Back to Dashboard</button>
</a>

</div>

</div>

</body>
</html>