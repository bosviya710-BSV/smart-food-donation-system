<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];

$sql = "SELECT * FROM food_donations WHERE donor_name='$user' ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Donations</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

<div class="login-card" style="width:95%;max-width:1000px;">

<h2>🍱 My Donations</h2>

<p>Your Donation History</p>

<table>

<tr>
<th>Food</th>
<th>Quantity</th>
<th>Category</th>
<th>Status</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['food_name']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>

<?php } ?>

</table>

<br>

<a href="dashboard.php" class="home-link">
⬅ Back to Dashboard
</a>

</div>

</div>

</body>
</html>