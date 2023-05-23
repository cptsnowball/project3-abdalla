<?php include 'session-start.php';?>
<?php include 'header.php';?>
<div class="results">
        <?php 
            if(isset($_SESSION['Role'])){
                $results = $_SESSION['Role'];
                unset($_SESSION['Role']);
                if($results=='admin'){
                    header('Location: newAccount.php');};
                if($results=='manager'){
                    header('Location: lostPassword.php');};
                if($results=='ceo'){
                    Header('Location: needHelp.php');};
            }
            else{
                header('Location: isntWorking.php');
            };
        ?>

    </div>
<?php include 'footer.php';?>