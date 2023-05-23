<?php include 'session-start.php';?>
<?php include 'header.php';?>

<h2 class="oops">Create an account</h2>

<?php
  if(count($_POST) > 0){if($_POST['email']!="" && $_POST['password']!=""){
    $_SESSION = $_POST;
    header('Location: sendEmail.php');}
  else{$nameError="validation";}}
?>

<form action="newAccount.php"method="post">
    <div>
    <label for="email">Email:</label>
    <input type="text" name= "email"><br>
    </div>
    <div>
    <label for="password">Password:</label>
    <input type="text" name= "password"><br>
    </div>
    <div>
    <input type="submit" name= "submit">
    </div>
</form>

<?php include 'footer.php';?>