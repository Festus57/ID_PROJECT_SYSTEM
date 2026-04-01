<?php 
include 'connection.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM register WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

    $fname=$row['fname'];
    $sname=$row['sname'];
    $nationalid=$row['nationalid'];
    $date=$row['date'];
    $gender=$row['gender'];
    $country=$row['country'];
    $provence=$row['provence'];
    $district=$row['district'];
    $sector=$row['sector'];
    $cell=$row['cell'];
    $village=$row['village'];
    $nfather=$row['nfather'];
    $nmother=$row['nmother'];
    $idfather=$row['idfather'];
    $idmother=$row['idmother'];
    $fphone=$row['fphone'];
    $mphone=$row['mphone'];
    $ownerphone=$row['ownerphone'];
    $file_name=$row['file'];


if(isset($_POST['update'])){
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
        $sql="UPDATE register SET fname='$fname', sname='$sname',nationalid='$nationalid',
        date='$date',gender='$gender',country='$country',provence='$provence',district='$district',
        sector='$sector',cell='$cell',village='$village',nfather='$nfather',nmother='$nmother',
        idfather='$idfather',idmother='$idmother',fphone='$fphone',mphone='$mphone',
        ownerphone='$ownerphone',file='$newFile' WHERE id='$id' ";

        if(mysqli_query($conn,$sql)){

            // Move image into folder
            move_uploaded_file($tempname, $folder);

            echo "<script>
                alert('Update User Successfully!');
                window.location.href='display.php';
            </script>";

        }else{
            echo "<script>alert('Update Failed');</script>";
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
            <b>Registration for Identification with Update Data of <label class="text-primary fw-bold">
                <?php echo $row['fname']." ".$row['sname']?>
            </laber></b>

        </div>
        <form method="post" enctype="multipart/form-data">                
        <div class="mt-2 p-5 " style="background-color: white;">
            <h5><b>Personal Id</b></h5>
            <p>This register is for to regist your owner identity with known as personal identity.</p>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control text-primary" name="image" value="<?php echo $row['file']; ?>">
                </div>
                <div class="container mt-2 w-5 fw-bold">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control text-primary" name="fname" value="<?php echo $row['fname']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Second name</label>
                    <input type="text" class="form-control text-primary" name="sname" value="<?php echo $row['sname']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">National ID number</label>
                    <input type="number" class="form-control text-primary" name="nationalid" value="<?php echo $row['nationalid']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Birth date</label>
                    <input type="date" class="form-control text-primary" name="date" value="<?php echo $row['date']; ?>">
                </div>
          <div class="container mt-3 fw-bold">
               <label class="form-label">Gender</label><br>

               <input type="radio" name="gender" value="Male" value="<?php echo $row['gender']; ?>">
               <label>Male</label>

               <input type="radio" name="gender" value="Female" value="<?php echo $row['gender']; ?>">
               <label>Female</label>
</div>

        </div>
        <div class="  p-5" style="background-color: white;">
            <h5><b>Location identity</b></h5>
            <p>About on this locational identity is base to your location mean where you live.</p>
                <div class="container mt-2 w-5 fw-bold">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control text-primary" name="country" value="<?php echo $row['country']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Provence</label>
                    <input type="text" class="form-control text-primary" name="provence" value="<?php echo $row['provence']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">District</label>
                    <input type="text" class="form-control text-primary" name="district" value="<?php echo $row['district']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Sector</label>
                    <input type="text" class="form-control text-primary" name="sector" value="<?php echo $row['sector']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Cell</label>
                    <input type="text" class="form-control text-primary" name="cell" value="<?php echo $row['cell']; ?>">
                </div>
                    <div class="container mt-2 fw-bold">
                    <label class="form-label">Village</label>
                    <input type="text" class="form-control text-primary" name="village" value="<?php echo $row['village']; ?>">
                </div>
        </div>

        <div class=" p-5 " style="background-color: white;">
            <h5><b>Relation identity</b></h5>
            <p>the relational identity is focused on other identity that are need but it for your some one has a
                relationship with you.</p>
                <div class="container mt-2 w-5 fw-bold">
                    <label class="form-label">Father's name</label>
                    <input type="text" class="form-control text-primary" name="nfather" value="<?php echo $row['nfather']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Mother's name</label>
                    <input type="text" class="form-control text-primary" name="nmother" value="<?php echo $row['nmother']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">National id of your father</label>
                    <input type="number" class="form-control text-primary" name="idfather" value="<?php echo $row['idfather']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">National id of mother</label>
                    <input type="number" class="form-control text-primary" name="idmother" value="<?php echo $row['idmother']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Father phone number</label>
                    <input type="number" class="form-control text-primary" name="fphone" value="<?php echo $row['fphone']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Mother phone number</label>
                    <input type="number" class="form-control text-primary" name="mphone" value="<?php echo $row['mphone']; ?>">
                </div>
                <div class="container mt-2 fw-bold">
                    <label class="form-label">Owner phone number</label>
                    <input type="number" class="form-control text-primary" name="ownerphone" value="<?php echo $row['ownerphone']; ?>">
                </div>
                <div class="container text-center pt-3">
                    <button class="btn btn-primary ps-25 pe-25 w-100" name="update">Click here for make Registration</button><br><br>
                    <a href="deletes.php" class="btn btn-primary ps-25 pe-25 w-100">Back</a>
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