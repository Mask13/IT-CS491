<?php
session_start();
require ("config.php");
	if(!(isset($_SESSION['role']))){
  header("Location: index.php");
}
	if(!($_SESSION['role']>=0)){
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-family: sans-serif; font-size: 120%; background-color: #36096d; background-image: linear-gradient(315deg, #36096d 0%, #37d5d6 74%);">
  <a class="navbar-brand" style ="color: black; font-size: 160%"><b>NJ-FSO</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="warmline.php"style ="color: black;">Warmline Contact</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="outreach.html"style ="color: black;">Community Outreach</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Family Support
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="intake.php">Participant Enrollment</a>

          <a class="dropdown-item" href="InitMeet.html">Assigned FSO Meetings</a>

          <a class="dropdown-item" href="SatisfactionSurvey.html">Family Satisfaction Survey</a>

        </div>
      </li>
    </ul>
      <button style="float:right" type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="location.href = 'logout.php';">Logout</button>
  </div>
</nav>
</header>
<body>
</body>
</html>
