<?php
session_start();
require ("config.php");
if(!isset($_SESSION['ID'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <style>
    .navbar {
       display: flex;
       align-items: center;
       justify-content: space-between;
       padding: 20px;
       background-color: #0077B6;
       color: #fff;
    }
    /* LOGO */
    .logo {
     font-size: 32px;
    }
    ul {
    	margin: 0;
    	padding: 5px;
    	list-style-type: none;
    	text-align: center;
      display: inline;
    }
    p {
      padding-left: 15px;
    }
    t {
      font-size: 20px;
    }
  </style>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
      <nav class="navbar">
        <ul class="nav-links">
          <span class="logo">NJAFSO</span>
        </ul>
        <button class = "btn btn-secondary"style= "float:right;"type="button" onclick="location.href = 'Logout.php';" name="Login"> Logout </button>
    </nav>
  </head>
  <br>
  <body>
      <p>
        <t>Forms:</t><br>
        <a class="btn btn-secondary" href="intake.php" role="button">Intake »</a>
        <br>
        <a class="btn btn-secondary" href="warmline.php" role="button">Outreach »</a>
        <br><br>
        <t>Displays:</t><br>
        <a class="btn btn-secondary" href="display_warm.php" role="button">Display Warmline »</a>
        <br>
        <a class="btn btn-secondary" href="display_intake.php" role="button">Display Intake »</a>
        <br>
        <a class="btn btn-secondary" href="display_family.php" role="button">Display Families »</a>
      </p>
  </body>
</html>
