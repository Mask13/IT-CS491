<html lang="en" dir="ltr">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style>
    bh{
    font-weight: regular;
    margin-right: 10px;
    font-size: 40px;
    padding: 10px;
    font-family: 'Poppins', sans-serif;
    }
  </style>
  <meta charset="utf-8">
  <title>Youth Partnership Meetings</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<html lang="en" dir="ltr">
<style media="screen">
  purple{
    color: purple;
  }
</style>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style>
    bh{
    font-weight: regular;
    margin-right: 10px;
    font-size: 40px;
    padding: 10px;
    font-family: 'Poppins', sans-serif;
    }
  </style>
  <meta charset="utf-8">
  <title>Youth Partnership Meetings</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<?php
    include_once('navbar.php');
?>
<body>
  <div class="col">
    <br><bh>Youth Partnership Meeting</bh><br><br>
    <form name="mainForm" method="post">
      <label for="Date of Meeting">Date of Meeting:</label>
      <input type="date" name="date_meet">
      <br>
      <label for="Meeting/Event Duration">Meeting/Event Duration:</label><br>
      <input type="number" name=duration_hours" placeholder="Hours">
      <input type="number" name=duration_minutes" placeholder="Minutes"><br><br>
      <label for="Type of Meeting">Type of Meeting:</label>
      <input type="text" name="type_meeting">
      <br>
      <b>Participants:</b><br>
	    <input type="checkbox" name="participants" value="1"/>
      Option to check off the enrolled participants (youth) that attended the meeting that day
      <br>
      <label for="Notes">Notes:</label><br>
      <textarea form="mainForm" name="notes" rows="5" cols="80"></textarea>

      <br><br>
	    <input type="hidden" name="submit_meeting" value="true"/>
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>
</html>

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

require("config.php");

if(!(isset($_SESSION['role']))){
  header("Location: index.php");
}
	if(!($_SESSION['role']>=0)){
	header("Location: index.php");
}

$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";



if(isset($_POST) && !empty($_POST['submit_meeting'])){
	$date_meet = $_POST['date_meet'];
	$duration_hours = $_POST['duration_hours'];
	$duration_minutes = $_POST['duration_meetins'];
	$type_meeting = $_POST['type_meeting'];

	$participants = $_POST['participants'];
	$notes = $_POST['notes'];

	$sql = "INSERT INTO `YouthPartnershipMeeting` (`date_of_meeting`, `duration_hours`, `duration_minutes`, `type_of_meeting`, `participants`, `notes`)";
	$sql .= " VALUES('$date_meet', '$duration_hours', '$duration_minutes', '$type_meeting', '$participants', '$notes')";

	if ($db->query($sql)) {
		echo '<script>alert("Success")</script>';

	} else {
		echo '<script>alert("Database error")</script>';
	}

}
