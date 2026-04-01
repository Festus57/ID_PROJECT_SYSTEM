<?php 
include 'connection.php';
$id=$_GET['deleteid'];
$sql="DELETE FROM register WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    ?>
    <script>
        alert("Delete Successfull");
        window.location.href="display.php";
    </script>
    <?php
}else{
        ?>
    <script>
        alert("Delete Failed Try again");
    </script>
    <?php
}

?>









