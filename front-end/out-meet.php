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

          <a class="nav-link" href="home.php"style ="color: black;">Home</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="warmline.php"style ="color: black;">Warmline Contact</a>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
      Community Outreach
      </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="out-Meet.php">FSO-Meeting and Training Attendance</a>
            <a class="dropdown-item" href="InitMeet.php">Assigned FSO Meetings</a>
            <a class="dropdown-item" href="Satisfaction-Survey.php">Family Satisfaction Survey</a>

          </div>
        </li>



        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">

            Family Support

          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="intake.php">Participant Enrollment</a>



            <a class="dropdown-item" href="InitMeet.php">Assigned FSO Meetings</a>



            <a class="dropdown-item" href="Satisfaction-Survey.php">Family Satisfaction Survey</a>



          </div>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">

            Display

          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="display_intake.php">Intake Display</a>

            <a class="dropdown-item" href="display_satisfaction.php">Display Satisfaction</a>

            <a class="dropdown-item" href="display_meet.php">Display Meet</a>

            <a class="dropdown-item" href="display_warm.php">Display Warmline</a>

          </div>

        </li>

      </ul>

        <button style="float:right" type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="location.href = 'logout.php';">Logout</button>

    </div>

  </nav>
</header>
<br>
<body>
    <form class="col" name="meeting" id="meeting" method="POST">
      <label for="TypeofMeeting/Tr">Type of Meeting/Training:</label>
      <select name="Type of Meeting2">
      <option value="FSO group supervision meeting">FSO Group Supervision Meeting</option>
      <option value="CMO training/community activity">CMO training/community activity</option>
      <option value="General Strategy/Policy/Procedure meeting">JDAI</option>
      <option value="Other">Other</option>
      <option value="ETO">ETO</option>
      <option value="Intern Supervision">Intern Supervision</option>
      <option value="Intern Training">Intern Training</option>
      <option value="Staff Training">Staff Training</option>
      <br>
      <br>
      </select>
      <br>
      <label for="Meeting/Training Location">Meeting/Training Location</label>
      <select name="Meeting/Training Location">
      <option value="Community">Community</option>
      <option value="Court">Court</option>
      <option value="Detention">Detention</option>
      <option value="Email/Fax">Email/Fax</option>
      <option value="FSO-Staff Meeting">FSO-Staff Meeting</option>
      <option value="Intern Supervision">Intern Supervision</option>
      <option value="Intern Training">Intern Training</option>
      <option value="Staff Training">Staff Training</option>
      <br>
      <br>
      </select>
      <br>
      <input class="button" type="submit" name="submit"/>
    </form>

</body>
</html>
