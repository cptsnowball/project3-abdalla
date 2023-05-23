<?php include 'session-start.php';?>
<?php include 'header.php';?>

<?php
  if(count($_POST) > 0){if($_POST['fName']!="" && $_POST['lName']!=""){
    $_SESSION['Role'] = $_POST['Role'];
    header('Location: problem.php');}
  else{$nameError="validation";}}
?>

    <div id="loginInfo">
      <h1 class="upcoming">Welcome To Your IT Support System</h1>
      <div class="login-text">
        <form action="admin-login.php" method="post">
          <label for="title">Title:</label>
          <select name="Title" id="title">
            <option value="mr">Mr.</option>
            <option value="ms">Ms.</option>
          </select><br>
          <div>
            <label for="fname">First name:</label>
            <input type="text" name= "fName"><br>
          </div>
          <div>
            <label for="lname">Last name:</label>
            <input type="text" name= "lName"><br>
          </div>
          <label for="role">Role:</label>
          <select name="Role" id="role">
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="ceo">CEO</option>
          </select><br>
          <input type="submit" name= "submit">
        </form>
      </div>
    </div>

<?php include 'footer.php';?>