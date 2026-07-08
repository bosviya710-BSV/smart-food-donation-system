<?php
session_start();
include("db.php");

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row['password'])){

        $_SESSION['user'] = $row['fullname'];
        $_SESSION['role'] = $row['user_type'];

        if($row['user_type'] == "Admin"){
            header("Location: admin_dashboard.php");
        }
        elseif($row['user_type'] == "Donor"){
            header("Location: dashboard.php");
        }
        elseif($row['user_type'] == "NGO"){
            header("Location: ngo_dashboard.php");
        }
        else{
            header("Location: dashboard.php");
        }

        exit();

    }else{
        echo "<script>alert('Incorrect Password');window.location='login.php';</script>";
    }

}else{
    echo "<script>alert('Email Not Registered');window.location='login.php';</script>";
}
?>