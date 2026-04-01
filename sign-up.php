<?php
session_start();
include 'connection.php';

if(isset($_POST['signup'])){

    $name     = mysqli_real_escape_string($conn, $_POST['name']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    // ✅ 1. Check if fields are empty
    if(empty($name) || empty($email) || empty($password) || empty($confirm)){
        echo "<script>alert('All fields are required!');
        window.location.href='sign-up.php';
        </script>";
        exit();
    }

    // ✅ 2. Check password length
    if(strlen($password) < 8){
        echo "<script>alert('Password must be at least 8 characters long!');
        window.location.href='sign-up.php';</script>";
        exit();
    }

    // ✅ 3. Check password match
    if($password !== $confirm){
        echo "<script>alert('Passwords do not match!');
        window.location.href='sign-up.php';</script>";
        exit();
    }

    // ✅ 4. Allow only ONE admin signup
    $checkAdmin = "SELECT * FROM signup LIMIT 1";
    $adminResult = mysqli_query($conn, $checkAdmin);

    if(mysqli_num_rows($adminResult) > 0){
        echo "<script>alert('Admin already exists! Signup not allowed.');
        window.location.href='sign-up.php';</script>";
        exit();
    }

    // ✅ 5. Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // ✅ 6. Insert admin into database
    $sql = "INSERT INTO signup (name, email, password) 
            VALUES ('$name', '$email', '$hashedPassword')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>
                alert('Admin Signup Successful!');
                window.location.href='admin.php';
              </script>";
    } else {
        echo "<script>alert('Signup Failed. Try again!');</script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDsystem</title>
    <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="icon" href="IMG/log.png">
</head>
<body>
    <div class="header p-4">
        <div class="heads">
            <img src="IMG/log.png">
            <label>IDsystem</label>
        </div>
        <div class="links">
<a href="index.php">Home</a>
<a href="index.php#about-us">About Us</a>
<a href="index.php#discussion">Discussion</a>
<a href="index.php#our-services">Our Services</a>
        </div>
       <div class="menu">        
         <button style="border:none; border-radius: 5px;" onclick="changetoggle()">
         <img src="IMG/menu.png" id="images">
        </button>
      </div>  
    </div>
            <div class="links-menu container" style="display:none;" >
<a href="index.php">Home</a>
<a href="index.php#about-us">About Us</a>
<a href="index.php#discussion">Discussion</a>
<a href="index.php#our-services">Our Services</a>

        </div>
    <div class=" border border-danger border-3"></div>
   <div class="container-fluid  text-center w-100 p-5" style=" display:flex; justify-content: center;background-color: white;">
    <div class="  shadow-lg  p-5">
        <form method="post">
            <h4 class="text-primary">Sign up in IDsystem for Admin</h4><br>
            <input type="text" class="form-control" placeholder="Enter here your names" name="name" required><br><br>
            <input type="text" class="form-control" placeholder="Enter here your e-mail" name="email" required><br><br>
            <input type="password" class="form-control" placeholder="Enter here your password" name="password" required><br><br>
            <input type="password" class="form-control" placeholder="Confirm your password" name="confirm" required><br><br>
            <button name="signup" class="form-control btn btn-primary">Sign up</button>
            <label>If you have an account go on <a href="login.php">Login</a></label>
        </form>
    </div>
   </div>

     <div class="foorter-part p-5 pb-4 bg-primary text-light" style=" display:flex;">
 
    <div class="container">
        <h5>Contact us</h5>
        <label>Email: writerdreaming2@gmail.com</label><br>
        <label>Phone number: 0798713792</label><br>
        <label>Company: Software Builder</label>
    </div>
        <div class="container">
        <h5>System</h5>
        <label>Name: IDsystem (Identification system) </label><br>
        <label>Update: After 12months updated </label><br>
        <label>Maintainance: After 6months </label><br>
    </div>
            <div class="container">
        <h5>Developer IDsystem</h5>
        <label>Name: Festus@57 </label><br>
        <label>Career: Software Develper </label><br>
        <label>Profile:</label>
        <img src="festus.png" id="festus" style="margin-left:10px;    height: 50px; border-radius:100%;
    width: 50px; object-fit: cover;">
    </div>
  </div>
    <footer>
        copy-right2025 IDsystem
    </footer>

        <script>
function changetoggle(){
    let menu = document.querySelector(".links-menu");

    if(menu.style.display === "none" || menu.style.display === ""){
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
}
</script>

    <script src="index.js"></script>
</body>
</html>