<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register | Smart Food Donation System</title>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="login-page">

<div class="login-card">

<h2>Create Account</h2>

<p>Join Smart Food Donation System</p>
<form action="register_process.php" method="POST">
<div class="input-box">
<i class="fa fa-user"></i>
<input type="text" name="name" placeholder="Full Name" required>
</div>

<div class="input-box">
<i class="fa fa-envelope"></i>
<input type="email" name="email" placeholder="Email Address" required>
</div>

<div class="input-box">
<i class="fa fa-phone"></i>
<input type="text" name="phone" placeholder="Phone Number" required>
</div>

<div class="input-box">
<i class="fa fa-users"></i>
<select name="role" required>
<option value="">Select User Type</option>
<option value="Donor">Donor</option>
<option value="NGO">NGO</option>
<option value="Volunteer">Volunteer</option>
</select>
</div>

<div class="input-box">
<i class="fa fa-lock"></i>
<input type="password" id="password" name="password" placeholder="Password" required>
</div>

<div class="input-box">
<i class="fa fa-lock"></i>
<input type="password" name="confirm_password" placeholder="Confirm Password" required>
</div>

<button type="submit" class="login-btn">
Create Account 
</button>

</form>

<p class="bottom-text">
Already have an account?
<a href="login.php">Login</a>
</p>

<a href="index.php" class="home-link">⬅ Back to Home</a>

</div>

</div>

<script>
function togglePassword(){
let x=document.getElementById("password");
if(x.type==="password"){
x.type="text";
}else{
x.type="password";
}
}
</script>

</body>
</html>