<?php
include 'db.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "UPDATE food_donations SET status='Accepted' WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        header("Location: ngo_dashboard.php");
        exit();
    }else{
        echo mysqli_error($conn);
    }
}
?>