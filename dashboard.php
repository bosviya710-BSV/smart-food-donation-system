<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | Smart Food Donation System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

<div class="login-card">

<h2>🍱 Smart Food Donation</h2>

<p>Welcome, <b><?php echo $_SESSION['user']; ?></b></p>

<p><b>Role :</b> <?php echo $_SESSION['role']; ?></p>

<?php if($_SESSION['role']=="Donor"){ ?>

<a href="donate_food.php">
<button class="login-btn">🍱 Donate Food</button>
</a>

<br><br>

<a href="my_donations.php">
<button class="login-btn">📋 My Donations</button>
</a>

<?php } ?>

<?php if($_SESSION['role']=="NGO"){ ?>

<br><br>

<a href="ngo_dashboard.php">
<button class="login-btn">🏢 NGO Dashboard</button>
</a>

<?php } ?>

<?php if($_SESSION['role']=="Volunteer"){ ?>

<br><br>

<a href="volunteer_dashboard.php">
<button class="login-btn">🚚 Volunteer Dashboard</button>
</a>

<?php } ?>

<?php if($_SESSION['role']=="Admin"){ ?>

<br><br>

<a href="admin_dashboard.php">
<button class="login-btn">👨‍💼 Admin Dashboard</button>
</a>

<?php } ?>

<br><br>

<a href="profile.php">
<button class="login-btn">👤 My Profile</button>
</a>

<br><br>

<a href="logout.php">
<button class="login-btn">🚪 Logout</button>
</a>

</div>

</div>

</body>

</html>