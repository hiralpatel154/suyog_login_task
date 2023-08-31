<?php
session_start();

include 'conn.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
}
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($conn,$sql);

if($result){
    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show'>User Registered Successfully <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    header('Location: login.php');
}

?>