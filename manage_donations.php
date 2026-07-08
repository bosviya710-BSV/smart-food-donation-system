<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
include("db.php");

if($_SESSION['role']!="Admin"){
    header("Location:login.php");
    exit();
}

$result=mysqli_query($conn,"SELECT * FROM food_donations");
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Donations</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

<div class="login-card" style="width:95%;max-width:1200px;">

<h2>🍱 Manage Donations</h2>

<p>All Food Donations</p>

<table>

<tr>
<th>ID</th>
<th>Donor</th>
<th>Food</th>
<th>Quantity</th>
<th>Category</th>
<th>Location</th>
<th>Status</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['donor_name']; ?></td>
<td><?php echo $row['food_name']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>

<?php } ?>

</table>

<br>

<a href="admin_dashboard.php" class="home-link">
⬅ Back to Admin Dashboard
</a>

</div>

</div>

</body>
</html>