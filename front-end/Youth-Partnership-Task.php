<html lang="en" dir="ltr">
<style media="screen">
  red{
    color: red;
  }
</style>
<head>
  <meta charset="utf-8">
  <title>Youth Partnership Tasks</title>
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
      <label for="Date of Task">Date of Task:</label>
      <input type="date" name="Date of Task"required>
      <br>
      <label for="Task Duration">Task Duration:</label><br>
      <input type="number" name="Task Duration Hour" placeholder="Hours"required>
      <input type="number" name="Task Duration Minutes" placeholder="Minutes"required><br><br>
      <label for="Staff">Staff:</label><br>
      PHP dropdown of staff
      <br>
      <label for="Task Discription">Description of Task:<red>*</red></label><br>
      <textarea form="mainForm" name="Task Discription" rows="5" cols="80"></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>
</html>
