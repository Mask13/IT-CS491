<?php
require("config.php");
session_start();

	if(!(isset($_SESSION['role']))){
  header("Location: index.php");
}
	if(!($_SESSION['role']>=0)){
	header("Location: index.php");
}

$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";

$db= new PDO($connection_string, $dbuser, $dbpass);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE);
$stmt = $db->prepare('SELECT firstname, lastname, fid, uid FROM family WHERE uid=:id');
$stmt->execute(['id' => intval($_SESSION["ID"])]);
$data = $stmt->fetchAll();

 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Satsifaction Survey</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <style>
    .button {
      padding: 7px 14px;
      text-align: center;
      display: inline-block;

      font-size: 16px;
    }
    .form1 br{
      margin-bottom: 1em;
      display:inline-block;
    }
    .form1 input{
      margin:5px;
    }
    .form1 select{
      margin:5px;
    }
    .form1 font{
      font-size: 30px;
    }
    font2{
      font-size: 17px;
      display: inline-block;
      margin-top: 5px;
      margin-bottom: 5px;
    }
  </style>

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

  <body>
    <div class="col">
    <form class ="form1" name="Intake" id="Intake" method="POST">
      <font> Satsifaction Survey: </font> <br>
      <label for="prompt">Select the Family.</label>
	  <br>
      <select name="family" required>
        <option value=""  disabled selected>Select an Option</option>
		<?php foreach ($data as $row) { ?>
		<option value= <?php echo $row["fid"]; ?> ><?php echo $row["firstname"]; echo " "; echo $row["lastname"]; echo " "; echo $row["fid"];}?> </option>
      </select><br>
	  <label for="prompt">The FSO staff provided services promptly and efficiently.</label>
      <br>
      <select name="prompt" required>
        <option value=""  disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="curteous">The FSO staff was curteous and professional.</label>
      <br>
      <select name="curteous" required>
        <option value=""  disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="informed">The FSO staff was informed or made an effort to get the information needed to assist me.</label>
      <br>
      <select name="informed" required>
        <option value=""  disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="answerQuestions">The FSO staff was knowledgable and able to answer my questions.</label>
      <br>
      <select name="answerQuestions" required>
        <option value=""  disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="advocacySkills">The FSO staff model self-advocacy skills for me.</label>
      <br>
      <select name="advocacySkills" required>
        <option value=""  disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="progress">The services that I received helped me to make progress towards my family's goals.</label>
      <br>
      <select name="progress" required>
        <option value="" disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="qualityOfLife">The quality of life in our home has improved as a result of the services provided by the FSO.</label>
      <br>
      <select name="qualityOfLife" required>
        <option value=""  disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="recommend">I would recommend the FSO services to other families.</label>
      <br>
      <select name="recommend" required>
        <option value=""  disabled selected>Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <input class="button" type="submit" name="submit"/>
    </form>
    </div>
  </body>
</html>

<?php
	if($_POST){

		try{
			$stmt = $db->prepare("INSERT INTO `survey`
                        VALUES (DEFAULT, :prompt,:court,:inform,:knowledge,:advocacy,:goals,:qol,:recommend,:fid)");
			$params = array(":prompt"=> $_POST["prompt"],":court"=> $_POST["curteous"], ":inform"=> $_POST["informed"],":knowledge"=> $_POST["answerQuestions"],":advocacy"=> $_POST["advocacySkills"],
							":goals"=> $_POST["progress"],":qol"=> $_POST["qualityOfLife"],":recommend"=> $_POST["recommend"], ":fid"=> $_POST["family"]);

			$stmt->execute($params);
			#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
		}

		catch(Exception $e){
                echo $e->getMessage();
                exit();
        }
	}

 ?>
