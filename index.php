<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDsystem</title>
    <link rel="icon" href="IMG/log.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header p-4">
        <div class="heads">
            <img src="IMG/log.png">
            <label>IDsystem</label>
        </div>
        <div class="links">
            <a href="#">Home</a>
            <a href="#about-us">About us</a>
            <a href="#discussion">Discussion</a>
            <a href="#our-service">Our servises</a>
            <a href="howit.php">How system works</a>
        </div>
       <div class="menu">        
         <button style="border:none; border-radius: 5px;" onclick="changetoggle()">
         <img src="IMG/menu.png" id="images">
        </button>
      </div>  
    </div>
            <div class="links-menu container" style="display:none;" >
            <a href="#">Home</a>
            <a href="#about-us">About us</a>
            <a href="#discussion">Discussion</a>
            <a href="#our-service">Our servises</a>
            <a href="howit.php">How system works</a>
        </div>
    <div class=" border border-danger border-3"></div>
    <div class="" style="
    background-image: url(IMG/back.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    " >
        <div class="container text-center text-light   pt-5 p-5 " >
            <h3 class="mt-5">Welcome to </h3>
            <h2>Identification System</h2>
            <label class="">IDsystem is focused on identification of person!</label> <br>
            <label>Create an account in IDsystem</label><br><br>
            <div class="btni">
            <button onclick="sign()"  class=" btn btn-primary  ">Sign up</button>
            <button onclick="login()" class=" btn btn-primary  ">Login</button><br><br>
            </div>
            <a href="howit.php" class="btn btn-success w-75"  >Start now </a>
        </div>
            <div class="pt-4 pb-5"
             style="background-color:white;opacity: 0.8; color:black;">
             <div class="container-md">
        <h4 class="text-success" 
        style="  font-family: 'Franklin Gothic Medium', 
        'Arial Narrow', Arial, sans-serif; ">
           <b> Introduction to our system</b></h4>
        <p class="form-text">
            <label>IDsystem is a digital platform designed to simplify how people register, store, and access
                identification</label><br>
            <label>information. Our goal is to make it easy for users to sign up, fill in their registration details,
                and later retrieve</label><br>
            <label>information quickly by simply entering a registered name. We focus on accuracy, security, and
                accessibility,</label><br>
            <label>ensuring every user’s data is safe and easy to manage.</label><br>
    
            <label>The IDsystem allows users to sign up easily, fill in their registration details, and later
                retrieve those records simply by entering a registered name.<br>
                It is built to save time, enhance accuracy, and ensure that every user’s data is stored safely and
                accessed efficiently.</label>
        </p>
        <img id="chence" src="IMG/icon3.png" style="height: 4vh; width: 5vw; margin: 5px;">
        <label><b>IDsystem means Identification System</b></label>
    </div>
    </div>
    </div>

    <div class="all_descation">
        <div class="all">
        <div class=" container-md container-description p-3 mt-1 form-text" id="discussion">
            <h4 style="color: rgb(19, 19, 84);">Discussion</h4>
            <div class="container">
            <label>The IDsystem plays a key role in improving how registration and data management are handled. It
                is</label><br>
            <label>designed with a user-friendly interface that makes it easy for anyone to use, even without technical
                skills.</label><br>
            <label>The system focuses on three main processes: sign up, registration, and information retrieval.</label>
            <p>
                <label>The IDsystem provides a practical solution to several common problems such as misplaced records,
                    delayed</label><br>
                <label>data retrieval, and lack of organization. By moving registration and storage processes online, it
                    not only</label><br>
                <label>saves time but also reduces costs associated with manual record-keeping.</label>
            </p>
         </div>
           </div>
        </div>
        <div class="all">
        <div class="container-md container-description p-3 mt-1 form-text" id="about-us">
            <h4 style="color: rgb(19, 19, 84);">About us</h4>
            <div class="home_image">
            <img src="IMG/back1.png">
            <img src="IMG/back6.png">
            <img src="IMG/back2.png">
           </div>
            <div class="container">
            <label>IDsystem is a digital platform designed to simplify how people register, store, and access
                identification</label><br>
            <label>information. Our goal is to make it easy for users to sign up, fill in their registration details,
                and later retrieve</label><br>
            <label>information quickly by simply entering a registered name. We focus on accuracy, security, and
                accessibility,</label><br>
            <label>ensuring every user’s data is safe and easy to manage.</label>
          </div>
        </div>
        </div>
        <div class="all">
        <div class=" container-description p-3 mt-1 form-text" id="our-service">
            <h4 style="color: rgb(19, 19, 84);">Our service</h4>
        <div class="home_image">
         <img src="IMG/back4.png">
         <img src="IMG/back5.png">
         <img src="IMG/back3.png">
        </div>

            <div class="container">
            <p>
                User Registration: Allows users to create accounts and securely register their personal or
                organizational information.
                Data Storage: Keeps all registration details safely in a well-organized database for future access.

                Information Retrieval: Enables users to search for and access registered information by entering a
                name.
                Data Management: Provides an easy way to view, update, or verify registered records.
            </p>
            </div>
        </div>`
      </div>
    </div>

    <div class="container-fluid div-foorter pt-4 mt-2">

        <div class="row div-inserid">
            <div class="col-sm">
            <h4 style="color: rgb(19, 19, 84);">Identification system</h4>
            <img src="IMG/back.png" id="home-image">
            </div>

            <div class="col-sm">
            <p class="container p-3 mt-1 form-text">
                <label>The <b> IDsystem </b> allows users to sign up easily, fill in their registration details, and later retrieve those records</label>
                <label>traditional registration processes into an efficient, reliable, and secure digital experience,
                    helping</label>
                <label>simply by entering a registered name. It is built to save time, enhance accuracy, <br>and ensure that every user’s data is stored safely and accessed efficiently.</label>
            </p>
            </div>
        </div>


        <div class="row div-inserid">
            <div class="col-sm">
            <h4 style="color: rgb(19, 19, 84);">IDsystem</h4>
            <img src="IMG/bac1.png" id="home-image">
            </div>

            <div class="col-sm">
            <p class="container p-3 mt-1 form-text">
                <label>the <b>IDsystem</b> is an innovative approach to digital identity and data management. It
                    transforms</label>
                <label>traditional registration processes into an efficient, reliable, and secure digital experience,
                    helping</label>
                <label>organizations and individuals manage information more effectively.</label>
            </p>

           </div>
        </div>
    </div>

    <footer>
        copy-right2025 IDsystem
    </footer>
    </div>
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