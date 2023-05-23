<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="icon" href="./assets/images/favicon.ico">
</head>

<?php include 'connect.php';?>

<body>
    <div id="pageContainer"> 
        <div id="contentWrap">
            <header>
                <div class="fixed-top">
                    <a id="navBtn" class="nav-btn"><span class="nav-icon"></span></a>
                    <h1 class="page-top">Halifax Canoe and Kayak</h1>
                    <img class="logo" src="./assets/images/paddle-white.png" alt="Logo">
                </div>
                <nav>
                    <div id="navMain" class="nav-bar">
                        <br>
                        <br>
                        <a href="/.">Home</a>
                        <br>
                        <br>
                        <a href="book-trip.php">Book Trip</a>
                        <br>
                        <br>
                        <a href="admin-login.php">Admin Login</a>
                        <br>
                        <br>
                        <a href="logout.php">Logout</a>
                        <br>
                        <br>
                        <a href="admin-add.php">Admin - Add Adventure</a>
                    </div>
                </nav>
            </header>
