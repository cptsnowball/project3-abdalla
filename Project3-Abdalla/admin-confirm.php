<?php include 'session-start.php';?>
<?php include 'header.php';
  
if(isset($_SESSION['formPostData'])){
    $postedData = $_SESSION['formPostData'];
    $_SESSION['confirmed'] = $postedData;
    unset($_SESSION['formPostData']);
    $newHeading = $postedData['heading'];
    $newTripDate = $postedData['tripdate'];
    $newDuration = $postedData['duration'];
    $newSummary = $postedData['summary'];
}
else{
    header('Location: admin-add.php');
}

?>

    <section id="info">
        <h1 class="upcoming">Admin - Confirm</h1>
        <p class="details">Data has been added successfully.</p>      
        <div>
            <label>Heading: </label> 
            <span><?=$newHeading?></span>
        </div>		
        <div>
            <label>Trip Date: </label>
            <span><?=$newTripDate?></span>
        </div>
        <div>
            <label>Duration: </label>
            <span><?=$newDuration?> Days</span>
        </div>
        <div>
            <label>Summary: </label>
            <span><?=$newSummary?></span>
        </div><br><br>
            <a class="city-name" href="all-adventures.php">View All Adventures</a>
    </section>

    <?php 
    $connection->query("INSERT INTO tripdb (heading, tripdate, duration, summary) VALUES ('$newHeading','$newTripDate',$newDuration,'$newSummary')");
    ?>
<?php include 'footer.php';?>