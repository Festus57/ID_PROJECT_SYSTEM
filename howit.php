<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDsystem</title>
    <link rel="stylesheet" href="style.css">
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
    <div class="systemwork">
    <div class=" howit">
        <div class=" how form-text">
            <h4>How the system work</h4>
            <label>ID registration is a digital process used to record, store,
                and retrieve personal information securely and efficiently.</label>
            <p>
            <h6>ID Registration:</h6>
            The process of collecting and storing personal information to identify a person.

            <h6>Digital Identity:</h6>
            Information stored in a system that represents a person online.

            <h6>User Enrollment:</h6>
            Registering a new user into a system.

            <h6>Identity Verification:</h6>
            Checking if the provided information is correct and belongs to the right person.</p>
        </div>
    </div>

    <div class="howit">
        <div class="col-sm how form-text">
            <h4>Some advantage of this system</h4>
            <label>ID registration is a digital process used to record, store,
                and retrieve personal information securely and efficiently.</label>
            <p>
            <h6>ID registration helps identify people correctly.</h6>

            <h6>It stores personal information in a secure system.</h6>

            <h6>Registered users can access their information easily.</h6>

            <h6>ID systems reduce errors and data loss.</h6>
            <h6>Digital registration saves time and effort.</h6>
            </p>
        </div>
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