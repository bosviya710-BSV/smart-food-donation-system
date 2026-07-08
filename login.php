<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smart Food Donation - Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<div class="login-page">

<div class="login-card">

<h1>🍱 Smart Food Donation</h1>

<p>Welcome Back</p>

<form action="login_process.php" method="POST">
<div class="input-box">
<i class="fa-solid fa-envelope"></i>
<input type="email" name="email" placeholder="Email Address" required>
</div>

<div class="input-box">
<i class="fa-solid fa-lock"></i>
<input type="password" id="password" name="password" placeholder="Password" required>
<i class="fa-solid fa-eye" onclick="togglePassword()"></i>
</div>

<div class="remember">

<label>
<input type="checkbox">
Remember Me
</label>

<a href="#">Forgot Password?</a>

</div>

<button class="login-btn" type="submit">
Login
</button>

</form>

<div class="bottom-text">

Don't have an account?

<a href="register.php">
Register Now
</a>

</div>

<a class="home-link" href="index.php">
← Back to Home
</a>

</div>

</div>

<script>

function togglePassword(){

var x=document.getElementById("password");

if(x.type==="password"){

x.type="text";

}else{

x.type="password";

}

}

</script>

</body>

</html>
