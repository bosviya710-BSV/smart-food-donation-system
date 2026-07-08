<?php
session_start();
include("db.php");

if($_SESSION['role']!="Admin"){
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

<div class="login-card" style="width:95%;max-width:1100px;">

<h2>👥 Manage Users</h2>

<p>Registered Users</p>

<table>

<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>User Type</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['user_type']; ?></td>
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