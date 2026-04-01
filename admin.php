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
        <div class="admin-mun bg-light ps-1">
            <button type="submit" class="btn btn-light mt-2"  onclick="check()">
            <img src="IMG/menu.png" id="images">
            </button>
            <label for=""><b>Admin Dashboard</b></label>
        </div>
        <div class="admin-sidebar w-50  shadow-lg bg-light">
                <a href="howit.php" class=" btn btn-primary " >How it work</a><br>
                <a href="registration.php" class=" btn btn-primary" >Register User</a><br>
                <a href="display.php" class=" btn btn-primary" >View all User</a><br>
                <a href="search.php" class=" btn btn-primary " >Data of User</a><br>
                <a href="deletes.php" class=" btn btn-primary" >Update User</a><br>
                <a href="deletes.php" class=" btn btn-primary" >Delete User</a>
        </div>
         <div class="d-flex" style="background-color: white;">
        <div class="container w-25 admin-sidepart    shadow">
            <h4 class="">Dashboard</h4>
            <label class="">Manage Control & Verfy User Data</label>
            <div id="link" class="pt-3   fw-bold">
                <a href="howit.php" class=" btn btn-primary " >How it work</a><br>
                <a href="registration.php" class=" btn btn-primary" >Register User</a><br>
                <a href="display.php" class=" btn btn-primary" >View all User</a><br>
                <a href="search.php" class=" btn btn-primary " >Data of User</a><br>
                <a href="deletes.php" class=" btn btn-primary" >Update User</a><br>
                <a href="deletes.php" class=" btn btn-primary" >Delete User</a>
            <div class="mt-2">
                <label class="">Manage Account</label>
                <button class="btn btn-primary btn-sm w-100">Logout</button>
            </div>
            </div>
        </div>
        <div class="col-sm container mt-5 p-4" style="overflow-y: scroll; height:80vh;">
            <h5 class="text-primary">Admin Dashboard</h5>
            <div class="">
                <label class="">The <b>Admin</b> is the main controller of the <b>IDsystem.</b> 
                    The admin manages the entire system by overseeing user registrations, 
                    verifying stored information, and maintaining data accuracy. The admin has the authority to 
                    add, update, or remove records when necessary to ensure the system remains organized and secure.
                   The <b>admin</b> also monitors system usage, protects user data,
                  and ensures that only authorized access is allowed. By managing 
                      these operations, the admin helps maintain reliability, security, and smooth
               functioning of the IDsystem.</label><br><br>
                <img src="IMG/admin.png" class="w-75" style=""><br><br>
                  
                <p>
                    <div class="c">
                        <img src="IMG/back.png" class="w-100">
                    </div>

<h5 class="text-primary">System Access and Features</h5>

<h6>Access the System</h6>
Authorized users or the admin log in to access the IDsystem. This ensures that only permitted users can manage or view registered information.

<h6>Register a User in the System</h6>
The system allows the admin or authorized user to register a new user by entering required identification details. Once submitted, the information is saved securely in the system database.

<h6>View the List of All Users</h6>
The system provides a complete list of all registered users. This helps the admin easily manage, review, and monitor existing records.

<h6>Update User Data</h6>
The admin can update or correct user information when changes are needed, ensuring that all records remain accurate and up to date.

<h6>View All Information of a User</h6>
By selecting a specific user, the system displays full details related to that user for verification or review purposes.

<h6>Delete a User from the System</h6>
The system allows the admin to remove a user’s record when it is no longer needed, helping keep the database clean and well organized.
                </p>
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

function check(){
        let admin = document.querySelector(".admin-sidebar");

    if(admin.style.display === "none" || admin.style.display === ""){
        admin.style.display = "block";
    } else {
        admin.style.display = "none";
    }
}
</script>

    <script src="index.js"></script>
</body>

</html>