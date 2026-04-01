<?php 
include 'connection.php';
if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $nationalid=$_POST['nationalid'];
    $date=$_POST['date'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $provence=$_POST['provence'];
    $district=$_POST['district'];
    $sector=$_POST['sector'];
    $cell=$_POST['cell'];
    $village=$_POST['village'];
    $nfather=$_POST['nfather'];
    $nmother=$_POST['nmother'];
    $idfather=$_POST['idfather'];
    $idmother=$_POST['idmother'];
    $fphone=$_POST['fphone'];
    $mphone=$_POST['mphone'];
    $ownerphone=$_POST['ownerphone'];

     // Image upload
    $file_name = $_FILES['image']['name'];
    $tempname  = $_FILES['image']['tmp_name'];

    // New file name
    $newFile = time()."_".$file_name;

    // Correct folder
    $folder = "images/".$newFile;

    // Allowed extensions
    $allowed = array("jpg","jpeg","png");
    $ext = strtolower(pathinfo($newFile, PATHINFO_EXTENSION));

    if(in_array($ext, $allowed)){

        // Insert into database
    $sql= "INSERT INTO register
    (file,fname,sname,nationalid,date,gender,country,provence,district,sector,cell,
    village,nfather,nmother,idfather,idmother,fphone,mphone,ownerphone)

    VALUES('$newFile','$fname','$sname','$nationalid','$date','$gender','$country',
    '$provence','$district','$sector','$cell','$village','$nfather','$nmother','$idfather',
    '$idmother','$fphone','$mphone','$ownerphone')";

        if(mysqli_query($conn,$sql)){

            // Move image into folder
            move_uploaded_file($tempname, $folder);

            echo "<script>
                alert('User Registered Successfully!');
                window.location.href='display.php';
            </script>";

        }else{
            echo "<script>alert('Database Insert Failed');</script>";
        }

    }else{
        echo "<script>alert('Only JPG, JPEG, PNG allowed');</script>";
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDsystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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

    <div class="">
        <div class="p-3 pt-5 fw-bold shadow" id="regist">
            <h2>Registration for Identification</h2>
            <p class="form-text">ID registration is the process of collecting, verifying, and securely
                storing personal information to create a unique digital identity.<br>
                ID registration is a digital process used to record, store, and retrieve
                personal information securely and efficiently.</p>

        </div>
        <form method="post" enctype="multipart/form-data">                
        <div class="mt-2 p-5 " style="background-color: white;">
            <h3><b>Personal Id</b></h3>
            <p>This register is for to regist your owner identity with known as personal identity.</p>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
                <div class="container mt-2 w-5 fw-bold">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control" name="fname" required placeholder=" Enter your first name">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Second name</label>
                    <input type="text" class="form-control" name="sname" required placeholder=" Enter your second name">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">National ID number</label>
                    <input type="number" class="form-control" name="nationalid" required
                        placeholder=" Enter your national id number">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Birth date</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
          <div class="container mt-3 fw-bold">
               <label class="form-label">Gender</label><br>

               <input type="radio" name="gender" value="Male">
               <label>Male</label>

               <input type="radio" name="gender" value="Female">
               <label>Female</label>
</div>

        </div>
        <div class="mt-2 p-5" style="background-color: white;">
            <h3><b>Location identity</b></h3>
            <p>About on this locational identity is base to your location mean where you live.</p>
                <div class="container mt-2 w-5 fw-bold">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" name="country" required
                        placeholder=" Enter your country name">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Provence</label>
                    <input type="text" class="form-control" name="provence" required placeholder=" Enter your provence">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">District</label>
                    <input type="text" class="form-control" name="district" required placeholder=" Enter your district">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Sector</label>
                    <input type="text" class="form-control" name="sector" required placeholder=" Enter your sector">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Cell</label>
                    <input type="text" class="form-control" name="cell" required placeholder=" Enter your cell">
                </div>
                    <div class="container mt-2 fw-bold">
                    <label class="form-label">Village</label>
                    <input type="text" class="form-control" name="village" required placeholder=" Enter your village">
                </div>
        </div>

        <div class="mt-2 p-5 " style="background-color: white;">
            <h3><b>Relation identity</b></h3>
            <p>the relational identity is focused on other identity that are need but it for your some one has a
                relationship with you.</p>
                <div class="container mt-2 w-5 fw-bold">
                    <label class="form-label">Father's name</label>
                    <input type="text" class="form-control" name="nfather" required
                        placeholder=" Enter your father name">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Mother's name</label>
                    <input type="text" class="form-control" name="nmother" required
                        placeholder=" Enter your mother name">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">National id of your father</label>
                    <input type="number" class="form-control" name="idfather" required
                        placeholder=" Enter your national id of your father">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">National id of mother</label>
                    <input type="number" class="form-control" name="idmother" required
                        placeholder=" Enter your national id of your mother">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Father phone number</label>
                    <input type="number" class="form-control" name="fphone" required
                        placeholder=" Enter your father phone">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Mother phone number</label>
                    <input type="number" class="form-control" name="mphone" required
                        placeholder=" Enter your mother phone">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Owner phone number</label>
                    <input type="number" class="form-control" name="ownerphone" required
                        placeholder=" Enter your owner phone">
                </div>
                <div class="container text-center pt-3">
                    <button class="btn btn-primary ps-25 pe-25 w-100" name="register">Click here for make Registration</button><br><br>
                    <a href="admin.php" class="btn btn-primary ps-25 pe-25 w-100">Back on Dashboard</a>
                </div>
        </div>
        </form>

      
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