<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['search']) && $_GET['search']!=""){

    $search = mysqli_real_escape_string($conn,$_GET['search']);

    $sql = "SELECT * FROM food_donations
            WHERE status='Available'
            AND expiry_time > NOW()
            AND food_name LIKE '%$search%'
            ORDER BY id DESC";

}else{

    $sql = "SELECT * FROM food_donations
            WHERE status='Available'
            AND expiry_time > NOW()
            ORDER BY id DESC";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>NGO Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>

<div class="login-page">

<div class="login-card" style="width:95%;max-width:1200px;">

<h2>🏢 NGO Dashboard</h2>

<p>Available Food Donations</p>

<form method="GET" style="display:flex;gap:10px;margin-bottom:25px;">
<input type="text" name="search" placeholder="Search Food">
<button type="submit" class="login-btn">Search</button>
</form>

<br>

<table border="1" cellpadding="10">
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
<?php if($row['status']=="Available"){ ?>
<a href="accept_food.php?id=<?php echo $row['id']; ?>">
<button>Accept</button>
</a>
<?php } else { ?>
Accepted
<?php } ?>
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