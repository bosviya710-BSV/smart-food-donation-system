<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

if(isset($_POST['name'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($check) > 0){
        echo "<script>
        alert('Email already exists');
        window.location='register.php';
        </script>";
        exit();
    }

    $sql = "INSERT INTO users(fullname,email,password,user_type)
            VALUES('$name','$email','$password','$role')";

    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";
    }else{
    die("Database Error: " . mysqli_error($conn));
}
}
?>