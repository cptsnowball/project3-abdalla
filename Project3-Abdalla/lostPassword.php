<?php include 'session-start.php';?>
<?php include 'header.php';?>

<h2 class="oops">Enter your email address</h2>

<?php
  if(count($_POST) > 0){if($_POST['password']!=""){
    $_SESSION = $_POST;
    header('Location: sendEmail.php');}
  else{$nameError="validation";}}
?>

<form action="lostPassword.php"method="post">
    <div>
    <label for="password">Password:</label>
    <input type="text" name= "password"><br>
    </div>
    <div>
    <input type="submit" name= "submit">
    </div>
</form>

<?php include 'footer.php';?>