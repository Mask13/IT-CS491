<html lang="en" dir="ltr">
<style media="screen">
  purple{
    color: purple;
  }
</style>
<head>
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
    <form name="mainForm" method="post">
      <label for="Date of Meeting">Date of Meeting:</label>
      <input type="date" name="Date of Meeting">
      <br>
      <label for="Meeting/Event Duration:">Meeting/Event Duration:</label><br>
      <input type="number" name="Meeting/Event Duration Hour" placeholder="Hours">
      <input type="number" name="Meeting/Event Duration Minutes" placeholder="Minutes"><br><br>
      <label for="Type of Meeting">Type of Meeting:</label>
      <input type="text" name="Type of Meeting">
      <br>
      <b>Participants:</b><br>
      Option to check off the enrolled participants (youth) that attended the meeting that day
      <br>
      <label for="Notes">Notes:</label><br>
      <textarea form="mainForm" name="Notes" rows="5" cols="80"></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>
</html>
