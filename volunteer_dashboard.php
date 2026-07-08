<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM food_donations WHERE status='Accepted' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Volunteer Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

<div class="login-card" style="width:95%;max-width:1200px;">

<h2>🚚 Volunteer Dashboard</h2>

<p>Accepted Food Donations</p>

<table>

<tr>
    <th>Donor</th>
    <th>Food</th>
    <th>Quantity</th>
    <th>Category</th>
    <th>Location</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
    <td><?php echo $row['donor_name']; ?></td>
    <td><?php echo $row['food_name']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="deliver_food.php?id=<?php echo $row['id']; ?>">
            <button>Deliver</button>
        </a>
    </td>
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