<?php include 'header.php';?>

<h2 class="oops">Contact a technician at (123)-456-7890 for more details</h2>

<?php 
        if(isset($_SESSION)){
            session_destroy();
        }
        else{
            header('Location: isntWorking.php');
        };
    ?>

<?php include 'footer.php';?>