<?php session_start(); ?>
<style>
  hotbox{
    border-radius:20px;
  }
  hotbox:hover{
    transition: .25s;
    background-color:black;
  }
</style>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-light" style="font-family: sans-serif; font-size: 120%; background-color: #36096d; background-image: linear-gradient(315deg, #36096d 10%, #FFAA00 75%);">

  <a class="navbar-brand" href="home.php" style ="color: black; font-size: 160%"><b>NJ-FSO</b></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <hotbox>
      <li class="nav-item">
        <a class="nav-link" href="warmline.php" style="color:white;">Warmline Contact</a>
      </li>
      </hotbox>
      <hotbox>
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" style="color:white;" id="navbarDropdown" role="button" data-toggle="dropdown">
            Community Outreach
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="out-Meet.php">FSO-Meeting and Training Attendance</a>
            <a class="dropdown-item" href="InitMeet.php">Assigned FSO Meetings</a>
            <a class="dropdown-item" href="CommMeet.php"> Community Initiatives and Meetings given by the FSO</a>
          </div>
        </li>
      </hotbox>
      <hotbox>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:white;" id="navbarDropdown" role="button" data-toggle="dropdown">
            Family Support
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="intake.php">Participant Enrollment</a>
            <a class="dropdown-item" href="InitMeet.php">Assigned FSO Meetings</a>
            <a class="dropdown-item" href="FANAssesment.php">FANS Assesment</a>
            <a class="dropdown-item" href="Satisfaction-Survey.php">Family Satisfaction Survey</a>
            <a class="dropdown-item" href="prognotes.php">Family Progress Notes</a>
          </div>

        </li>
      </hotbox>
      <hotbox>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:white;" id="navbarDropdown" role="button" data-toggle="dropdown">
              Youth Partnership
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Youth-Partnership-Inake.php">Youth Partnership Intake</a>
            <a class="dropdown-item" href="Youth-Partnership-Meeting.php">Youth Partnership Meeting</a>
            <a class="dropdown-item" href="Youth-Partnership-Task.php">Youth Partnership Task</a>
          </div>

        </li>
      </hotbox>
      <hotbox>
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" style="color:white;" id="navbarDropdown" role="button" data-toggle="dropdown">

            Display

          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="display_intake.php">Intake Display</a>

            <a class="dropdown-item" href="display_satisfaction.php">Display Satisfaction</a>

            <a class="dropdown-item" href="display_meet.php">Display FSO Meeting</a>

            <a class="dropdown-item" href="display_warm.php">Display Warmline</a>

            <a class="dropdown-item" href="display_comm.php">Display Community Meetings</a>

            <a class="dropdown-item" href="display_fans.php">Display FAN Assesment</a>

            <a class="dropdown-item" href="display_outmeet.php">Display Outreach Meeting</a>

          </div>

        </li>
      </hotbox>
    </ul>

      <button style="float:right" type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="location.href = 'logout.php';">Logout</button>

  </div>
  </nav>
</header>
