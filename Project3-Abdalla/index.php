<?php include 'session-start.php';?>
<?php 
include 'header.php';
$tempHeading = "Halifax";
$resultTest = $connection->prepare("SELECT heading, tripdate, duration, summary FROM tripdb WHERE heading = ?");
$resultTest->bind_param("s",$tempHeading);
$resultTest->execute();
$resultTest->bind_result($heading,$tripdate,$duration,$summary);
$resultTest->store_result();
if($resultTest->num_rows > 0){    
    while($resultTest->fetch()){}
}

$tempHeading2 = "Sydney";
$resultTest2 = $connection->prepare("SELECT heading, tripdate, duration, summary FROM tripdb WHERE heading = ?");   
$resultTest2->bind_param("s",$tempHeading2);
$resultTest2->execute();
$resultTest2->bind_result($heading2,$tripdate2,$duration2,$summary2);
$resultTest2->store_result();
if($resultTest2->num_rows > 0){    
    while($resultTest2->fetch()){}
}?>

    <div class="img-text">Come Experience <br> Canada</div>
    <section id="info">
        <h1 class="upcoming">Upcoming Adventures</h1>
        <h2 class="city-name"><?php echo($heading.PHP_EOL)?></h2>
        <p class="details"><?php echo($tripdate.PHP_EOL)?><br><?php echo($duration." Days".PHP_EOL)?></p>
        <h3>Summary</h3>
        <p><?php echo($summary.PHP_EOL)?></p>
        <h2 class="city-name"><?php echo($heading2.PHP_EOL)?></h2>
        <p class="details"><?php echo($tripdate2.PHP_EOL)?><br><?php echo($duration2." Days".PHP_EOL)?></p>
        <h3>Summary</h3>
        <p><?php echo($summary2.PHP_EOL)?></p>
    </section>

<?php
$resultTest->close();
$resultTest2->close();
include 'footer.php';
?>