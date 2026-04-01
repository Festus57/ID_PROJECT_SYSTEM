
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
    
    <div class="p-5 pt-3 " style="background-color:white;">
        <div class="text-center">
            <label for=""><b>The details or information of user</b></label><br>
            <label>To view the details of user is made in this process </label>

             <form method="post">
            <div class="shadow-lg mt-3" style="display:flex; justify-content:center">
            <div class="search ms-5 w-50  pt-4 pb-4 ps-4 text-center">
                <input type="text" class="form-control" placeholder="Search a deteil of user" name="search">
            </div>
            <div class="pt-4 mt-1 ps-2">
            <button type="submit" class="btn btn-primary btn-sm" name="search_user">Search</button>
          </div>
         </form>
         </div>
        </div>
        
        <div class="">
      <?php 
include "connection.php";

if(isset($_POST['search_user'])){

    $search = $_POST['search'];

    // Prevent empty search
    if(empty($search)){
        echo "<h4 class='text-danger'>Please enter a name or ID!</h4>";
    }
    else{

        // Correct query using LIKE
        $sql = "SELECT * FROM register 
                WHERE id LIKE '$search'
                OR fname LIKE '%$search%'
                OR sname LIKE '%$search%'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
?>
            <table class="table table-bordered shadow-lg">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>National ID</th>
                    </tr>
                </thead>
                <tbody>

                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td>
                            <a href="userinfo.php?userinfo=<?php echo$row['id']; ?>" >
                            <img src="images/<?php echo $row['file']; ?>"
                                 width="70" height="70"
                                 style="border-radius:10px; object-fit:cover;">
                                    </a>
 
                        </td>

                        <td><a href="userinfo.php?userinfo=<?php echo$row['id']; ?>" >
                            <?php echo $row['fname']." ". $row['sname']; ?></td></a>
                        <td><a href="userinfo.php?userinfo=<?php echo$row['id']; ?>" >
                            <?php echo $row['nationalid']; ?></td></a>
                    </tr>

                <?php } ?>

                </tbody>
            </table>

<?php
        }
        else{
            echo "<h3 class='text-danger'>No User Found!</h3>";
        }
    }
}
?>

           </div>
     
        <div class=" shadow p-4  mt-5 " style="margin-left:10px">
            <label><b>About on View Data of User</b></label>
            <p class="form-text">
            <b>View All Information of a User</b>
By selecting a specific user, the system displays full details related to that user for verification or review purposes.
            </p>
            <a href="admin.php" class="btn btn-primary">Back on Dashboard</a>
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