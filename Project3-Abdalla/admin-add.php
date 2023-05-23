<?php include 'session-start.php';?>
<?php include 'header.php';

if(count($_POST) > 0){

    if($_POST['heading']!='' && $_POST['tripdate']!='' && $_POST['duration']!=''&& $_POST['summary']!=''){
        $_SESSION['formPostData'] = $_POST;
        $_SESSION['userInputHeader'] = $_POST['heading'];
        header('Location: admin-confirm.php');
    }
    else{
		$nameError = 'validation';
    }
}?>

<section id="info">
    <h1 class="upcoming">Admin - Add Adventure</h1>
</section>
<div id="loginInfo">
			<h2>
				Input details about the trip below
			</h2>
		</div>        
        <div>
            <form method="post" action="admin-add.php" >

                <div class="nameError">
                    <label>Heading: </label>
                    <input type="text" name="heading"/>
                </div>		

                <div class="nameError">
                    <label>Trip Date: </label>
                    <input type="date" name="tripdate"/>
                </div>

                <div class="nameError">
                    <label>Duration (Days): </label>
                    <input type="number" name="duration" min="0" max="9"/>
                </div>

                <div class="nameError">
                    <label><br>Summary: </label>
                    <textarea name="summary"></textarea>
                </div>
                <input type="submit" name= "submit" value="Submit">
            </form>
        </div>

<a class="city-name" href="all-adventures.php">View All Adventures</a>
<?php include 'footer.php';?>