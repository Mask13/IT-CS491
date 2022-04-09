<?php session_start(); ?>

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

          <a class="dropdown-item" href="FANAssesment.php">FANS Assesment</a>

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
