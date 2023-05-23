<?php include 'session-start.php';?>
<?php include 'header.php';?>
<div>
    <?php 
        if(isset($_SESSION)){
            session_destroy();
        }
        else{
            header('Location: isntWorking.php');
        };
    ?>
    <h2 class="oops">Check your inbox for a confirmation email</h2>
</div>
<?php include 'footer.php';?>