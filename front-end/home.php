<?php
session_start();
require ("config.php");
if(!isset($_SESSION['UID'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <button style= "float:right;"type="button" onclick="location.href = 'logout.php';"
          name="Login"> Logout
    </button>
  </head>
  <br>
  <body>
    Forms:<br>
    <button type="button" onclick="location.href = 'intake.php';"
          name="Intake"> Intake
    </button><br>
    <button type="button" onclick="location.href = 'warmline.php';"
          name="Outreach"> Outreach
    </button><br><br>
    Displays:<br>
    <button type="button" onclick="location.href = 'display_warm.php';"
          name="Login"> Display Warmline
    </button><br>
    <button type="button" onclick="location.href = 'display_intake.php';"
          name="Login"> Display Intake
    </button>
  </body>
</html>
