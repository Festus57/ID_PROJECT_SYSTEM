<?php
include 'connection.php';
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
        <div class=" p-4 pb-2 " style="background-color: white; display: flex; justify-content: center;">
            <div class="shadow-lg p-4">
                <p><b>View the List of All Users</b><br>
The system provides a complete list of all registered users.
 This helps the admin easily manage, review, and monitor existing records.</p>
 <a href="admin.php" class="btn btn-primary btn-sm">Back on Dashboard</a>
            </div>
        </div>
       <div class="" style="background-color: white;">
             <h5 class="text-primary text-center">List of all User</h5>
             <div class="container pt-1 p-3">
            <div class="" style="display:flex; justify-content:end;">
            <div class="mb-1 me-3"><a href="registration.php" class="btn btn-success btn-sm">+ add new</a></div>
             </div>
             <div class="">
                <table class=" container-table table table-bordered">
                    <thead class="table-info">
                        <tr>
                        <th>Personal Image</th>
                        <th>Full name</th>
                        <th>National Id</th>
                        <th>Phone number</th>
                        <th>Optionality</th>
                        </tr>
                    </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM register";
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>

                        <td>
                            <img src="images/<?php echo $row['file']; ?>"
                                 width="70" height="70"
                                 style="border-radius:10px; object-fit:cover;">
                        </td>

                        <td><?php echo $row['fname']." ".$row['sname']; ?></td>
                        <td><?php echo $row['nationalid']; ?></td>
                        <td><?php echo $row['ownerphone']; ?></td>
                        <td>
                            <a href="update.php?updateid=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Update</a>
                            <a href="delete.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table> 
               </div>
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