<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['role']!="Admin"){
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

<div class="login-card">

<h2>👨‍💼 Admin Dashboard</h2>

<p>Welcome, <strong><?php echo $_SESSION['user']; ?></strong></p>

<p><strong>Role:</strong> <?php echo $_SESSION['role']; ?></p>

<a href="manage_users.php">
<button class="login-btn">👥 Manage Users</button>
</a>

<a href="manage_donations.php">
<button class="login-btn">🍱 Manage Donations</button>
</a>

<a href="ngo_dashboard.php">
<button class="login-btn">🏢 NGO Dashboard</button>
</a>

<a href="volunteer_dashboard.php">
<button class="login-btn">🚚 Volunteer Dashboard</button>
</a>

<a href="logout.php">
<button class="login-btn">🚪 Logout</button>
</a>

</div>

</div>

</body>
</html>