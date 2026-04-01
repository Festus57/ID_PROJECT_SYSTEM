<?php
session_start();
include 'connection.php';

if(isset($_POST['login'])){

    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // ✅ Check if email exists
    $sql = "SELECT * FROM signup WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_assoc($result);

        // ✅ Verify password
        if(password_verify($password, $row['password'])){

            $_SESSION['admin_email'] = $row['email'];

            // ✅ Admin goes to dashboard
            header("Location: admin.php");
            exit();

        } else {
            echo "<script>alert('Wrong Password!');</script>";
        }

    } else {
        echo "<script>alert('Email not found!');</script>";
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
    <div class=" text-center p-5" style=" display:flex; justify-content: center;background-color: white;">
        <div class="form-contain-login shadow-lg  p-5">
            <form method="post">
                <h4 class="text-primary">Login in IDsystem for Admin</h4><br>
                <input type="text" class="form-control" placeholder="Enter here your e-mail" name="email" required><br><br>
                <input type="password" class="form-control" placeholder="Enter here your password" name="password" required><br><br>
                <a href="#" class="btn btn-primary form-control">Forgot password?</a><br><br>
                <button name="login" class="form-control btn btn-primary">Login</button><br>
                <label>If you don't have an account go on <a href="sign-up.php">Sign up</a></label>
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
        <img src="IMG/festus.png" id="festus" style="margin-left:10px;    height: 50px; border-radius:100%;
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