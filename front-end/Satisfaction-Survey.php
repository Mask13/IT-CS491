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
    <button style= "float:right;"type="button" onclick="location.href = 'Logout.php';"
          name="Login"> Logout
    </button>
    <button style= "float:right;"type="button" onclick="location.href = 'home.php';"
          name="Login"> Home
    </button>
  </head><br><br>
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
  <body>
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
