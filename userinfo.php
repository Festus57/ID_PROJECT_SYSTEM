<?php 
include 'connection.php';
$id=$_GET['userinfo'];
$sql="SELECT * FROM register WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

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
    <div class="p-3" style="background-color:white;">
        <div class="container p-3">
            <label for=""><b>The information in details of</b>
            <label class="fw-bold text-primary"><?php echo$row['fname']." ".$row['sname']; ?></label> </label>
            <p>On information and data of  is detailed in three part which is this:
                <li class="ms-3">About personal identity</li>
                <li class="ms-3">Location of
                <label class=" text-primary"><?php echo$row['fname']." ".$row['sname']; ?></label> </li>
                <li class="ms-3">Identity of Relational for
                <label class="text text-primary"><?php echo$row['fname']." ".$row['sname']; ?></label> </li>
            </p>

        </div>
        <div class="container p-4 shadow-lg">
            <label><b>Identity for <label class="fw-bold text-primary"><?php echo$row['fname']." ".$row['sname']; ?></label></b></label>
            <table class="table container-table">
                    <tr>
                    <th>Image or Photo</th>
                    <th>Full name</th>
                    <th>National ID</th>
                    </tr>
                     <tr>
                        <td>
                        <img src="images/<?php echo $row['file']; ?>"
                        width="70" height="70"
                        style="border-radius:10px; object-fit:cover;">
                        </td>
                        <td><?php echo$row['fname']." ".$row['sname']; ?></td>
                        <td><?php echo$row['nationalid']; ?></td>
                     </tr>
            </table>
                <table class="table container-table">
                    <tr>                  
                    <th>Phone number</th>
                    <th>Birth date</th>
                    <th>Gender</th>
                    </tr>
                  <tr>

                        <td><?php echo$row['ownerphone']; ?></td>
                        <td><?php echo$row['date']; ?></td>
                        <td><?php echo$row['gender']; ?></td>
                    </tr>
            </table>
        </div>
            <div class="container p-4 shadow-lg">
            <label><b>Location for <label class="fw-bold text-primary"><?php echo$row['fname']." ".$row['sname']; ?></label></b></label>
            <table class="table container-table">
                <tr>
                    <th>Country</th>
                    <th>Provence</th>
                    <th>District</th>
                </tr>
                    <tr>
                        <td><?php echo$row['country']; ?></td>
                        <td><?php echo$row['provence']; ?></td>
                        <td><?php echo$row['district']; ?></td>
                    <tr>

        <table class="table container-table">
                <tr>
                    <th>Sector</th>
                    <th>Cell</th>
                    <th>Village</th>
                </tr>
                    <tr>
                        <td><?php echo$row['sector']; ?></td>
                        <td><?php echo$row['cell']; ?></td>
                        <td><?php echo$row['village']; ?></td>
                    </tr>
            </table>
        </div>
                        <div class="container p-4 shadow-lg">
            <label><b>Identity of Relational for <label class="fw-bold text-primary"><?php echo$row['fname']." ".$row['sname']; ?></label></b></label>
            <table class="table container-table">
                <tr>
                    <th>Father's name</th>
                    <th>Mother's name</th>
                    <th>Father national ID</th>
            </tr>
                    <tr>
                        <td><?php echo$row['nfather']; ?></td>
                        <td><?php echo$row['nmother']; ?></td>
                        <td><?php echo$row['idfather']; ?></td>
                    </tr>
            </table>
            <table class="table container-table">
            <tr>
                    <th>Mother national ID</th>
                    <th>Father phone number</th>
                    <th>Mother phone number</th>
            </tr>
                   <tr>
                        <td><?php echo$row['idmother']; ?></td>
                        <td><?php echo$row['fphone']; ?></td>
                        <td><?php echo$row['mphone']; ?></td>
                    </tr>
            </table>
        </div>
        <div class=" p-3">
             <a href="search.php" class="btn btn-primary btn-sm w-100">Back</a><br><br>
            <a href="admin.php" class="btn btn-primary btn-sm w-100">Dashboard</a>
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