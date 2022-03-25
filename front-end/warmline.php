<?php
require("config.php");
session_start();
$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
 ?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Outreach</title>
    <title>Register</title>
    <button style= "float:right;"type="button" onclick="location.href = 'Logout.php';"
          name="Login"> Logout
    </button>
    <button style= "float:right;"type="button" onclick="location.href = 'home.html';"
          name="Login"> Home
    </button>
  </head>
  <style media="screen">
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
  </style>
  <body>
    <form class="form1" name="Warmlines" id="Warmlines" method="POST">
      <font size="5"> Warmlines:</font><br>
      <label for="contactLocation">Contact Location:</label>
      <select name="contactLocation">
        <option value="Program Site">At Program Stie</option>
        <option value="Child Family Team">Child Family Team</option>
        <option value="Church">Church</option>
        <option value="Court">Court</option>
        <option value="Family Home Vist">Family Home Vist</option>
        <option value="Hospital">Hospital</option>
        <option value="Host Event">Host Event</option>
        <option value="Initial Strengths and Needs">Initial Strengths and Needs</option>
        <option value="Mail">Mail</option>
        <option value="Meet and Greet">Meet and Greet</option>
        <option value="Meeting">Meeting</option>
        <option value="On the Phone">On the Phone</option>
        <option value="On the Street">On the Street</option>
        <option value="Other Location in the Community">Other Location in the Community</option>
        <option value="Other Phone Call">Other Phone Call</option>
        <option value="Partner Agency">Partner Agency</option>
        <option value="Phone call to CMO">Phone call to CMO</option>
        <option value="Phone call to family">Phone call to family</option>
        <option value="Research Resources">Other Phone Call</option>
        <option value="School">Partner Agency</option>
        <option value="Transportation">Transportation</option>
        <option value="WL Research/Collateral Call">WL Research/Collateral Call</option>
        <option value="Youth Event">Youth Event</option>
      </select><br>
      <label for="SupportLevel">Support Level:</label>
      <select name="SupportLevel">
        <option value="Low Level of Support">Low Level of Support</option>
        <option value="Moderate Level of Support">Moderate Level of Support</option>
        <option value="High Level of Support">High Level of Support</option>
      </select><br>
      <label for="TypeOfCaller">Type Of Caller:</label>
      <select name="TypeOfCaller">
        <option value="Parent">Parent</option>
        <option value="Grandparent">Grandparent</option>
        <option value="Someone Calling on Behalf">Someone Calling on Behalf</option>
        <option value="Child/Youth">Child/Youth</option>
        <option value="Previous CMO Family">Previous CMO Family</option>
        <option value="Other: specify in notes">Other: specify in notes</option>
        <option value="Returning CMO Family">Returning CMO Family</option>
      </select><br>
      <label for="CallerRefered">Caller Refered By:</label>
      <select name="CallerRefered">
        <option value="DCPP">DCPP</option>
        <option value="Web Or Internet">Web/Internet</option>
        <option value="Mobile Response">Mobile Response</option>
        <option value="NAMI">NAMI</option>
        <option value="PreformCare">Preform Care</option>
        <option value="Counselor">Counselor</option>
        <option value="CSA">CSA</option>
        <option value="SPAN">SPAN</option>
        <option value="School">School</option>
        <option value="Other: specify in notes">Other: specify in notes</option>
        <option value="CMO">CMO</option>
        <option value="Family Success Center">Family Success Center</option>
        <option value="Parents Anonymous">Parents Anonymous</option>
        <option value="Previous CMO Family">Previous CMO Family</option>
      </select><br>

      <font size="3"> Reason for Call/Issues Disscused: </font><br>

      <input type="checkbox" name="Reason[]" value="Food">
      <label for="Food">Food</label><br>

      <input type="checkbox" name="Reason[]" value="Mental Health">
      <label for="MentalHealth">Mental Health</label><br>

      <input type="checkbox" name="Reason[]" value="Transportation">
      <label for="Transportation">Transportation</label><br>

      <input type="checkbox" name="Reason[]" value="DomesticViolence">
      <label for="DomesticViolence">Domestic Violence</label><br>

      <input type="checkbox" name="Reason[]" value="MedicalInformation">
      <label for="MedicalInformation">Medical Information</label><br>

      <input type="checkbox" name="Reason[]" value="Shelter">
      <label for="Shelter">Shelter</label><br>

      <input type="checkbox" name="Reason[]" value="School">
      <label for="School">School</label><br>

      <input type="checkbox" name="Reason[]" value="Leagal">
      <label for="Leagal">Leagal</label><br>

      <input type="checkbox" name="Reason[]" value="Housing">
      <label for="Housing">Housing</label><br>

      <input type="checkbox" name="Reason[]" value="Employment">
      <label for="Employment">Employment</label><br>

      <input type="checkbox" name="Reason[]" value="Custody">
      <label for="Custody">Custody</label><br>

      <input type="checkbox" name="Reason[]" value="FamilySatisfactionSurvey">
      <label for="FamilySatisfactionSurvey">Family Satisfaction Survey</label><br>

      <input type="checkbox" name="Reason[]" value="DDD">
      <label for="DDD">DDD</label><br>

      <input type="checkbox" name="Reason[]" value="SubstanceRelated">
      <label for="SubstanceRelated">Substance Related Issue/Program</label><br>

      <input type="checkbox" name="Reason[]" value="SubstanceAbuseRelated">
      <label for="SubstanceAbuseRelated">Substance Abuse Related/Treatment</label><br>

      <font size="3"> Resources/Referrals: </font><br>

      <input type="checkbox" name="Resources[]" value="NewsLetter">
      <label for="NewsLetter">News Letter</label><br>

      <input type="checkbox" name="Resources[]" value="Workshop">
      <label for="Workshop">Workshop</label><br>

      <input type="checkbox" name="Resources[]" value="FamilySupport">
      <label for="FamilySupport">Family Support</label><br>

      <input type="checkbox" name="Resources[]" value="YouthPartnership">
      <label for="YouthPartnership">Youth Partnership</label><br>

      <input type="checkbox" name="Resources[]" value="Presentation">
      <label for="Presentation">Presentation</label><br>

      <input type="checkbox" name="Resources[]" value="Training">
      <label for="Training">Training</label><br>

      <input type="checkbox" name="Resources[]" value="SupportGroup">
      <label for="SupportGroup">Support Group</label><br>

      <input type="checkbox" name="Resources[]" value="SupportTelephoneCouseling">
      <label for="SupportTelephoneCouseling">Support Telephone Counseling</label><br>

      <input type="checkbox" name="Resources[]" value="OtherCommunityResource">
      <label for="OtherCommunityResource">Other Community Resource</label><br>

      <input type="checkbox" name="Resources[]" value="PreformCare">
      <label for="PreformCare">Preform Care</label><br>

      <input type="checkbox" name="Resources[]" value="DDD">
      <label for="DDD">DDD</label><br>

      <input type="checkbox" name="Resources[]" value="SubstanceRelated">
      <label for="SubstanceRelated">Substance Related Issue/Program</label><br>

      <input type="checkbox" name="Resources[]" value="SubstanceAbuseRelated">
      <label for="SubstanceAbuseRelated">Substance Abuse Related/Treatment</label><br>

      <input type="checkbox" name="Resources[]" value="PEP">
      <label for="PEP">PEP/Parents Anonymous</label><br>

      <label for="TimeSpentSupport">Time Spent - Support Level</label>
      <input type="number" name="TimeSpentSupport"> Minutes</input><br>

      <label for="Notes">Notes:</label>
      <input type="text" name="Notes"/><br>

      <label for="WarmlineContact">Warmline Contact:</label>
      <select name="WarmlineContact">
        <option value="Low Level of Support">Low Level of Support</option>
        <option value="Moderate Level of Support">Low Level of Support</option>
        <option value="High Level of Support">Low Level of Support</option>
      </select><br>

      <label for="TimeSpentWarm">Time Spent - Warmline Contact</label>
      <input type="number" name="TimeSpentWarm"> Minutes</input><br>
	   <input class="button" type="submit" name="register"/>
    </form>
  </body>
</html>

<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

if($_POST){
	var_dump($_POST);
	//var_dump($_POST["firstName"]);

	try{
		$db = new PDO($connection_string, $dbuser, $dbpass);
		$stmt = $db->prepare("INSERT INTO `warmline`
							VALUES (:contactLocation, :supportlevel, :typeofcaller, :callerreferedby, :reasonforcall, :resources, :timespentsupport,
									:notes, :warmcontact, :timespentwarm, DEFAULT)");

		if ($_POST["Reason"]){
			$reason_str = implode (", ", $_POST["Reason"]);
		}

		else{
			$reason_str = NULL;
		}

		if ($_POST["Resources"]){
			$resources_str = implode (", ", $_POST["Resources"]);
		}

		else{
			$resources_str = NULL;
		}


		$params = array(":contactLocation"=> $_POST["contactLocation"],":supportlevel"=> $_POST["SupportLevel"], ":timespentsupport"=> $_POST["TimeSpentSupport"],
						":typeofcaller"=> $_POST["TypeOfCaller"], ":callerreferedby"=> $_POST["CallerRefered"], ":reasonforcall"=> $reason_str,
						":resources"=> $resources_str, ":notes"=> $_POST["Notes"], ":warmcontact"=> $_POST["WarmlineContact"], ":timespentwarm"=> $_POST["TimeSpentWarm"]);
		$stmt->execute($params);

		//$id = $db->lastInsertId();



		//var_dump($id);
        //echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
        }
        catch(Exception $e){
                echo $e->getMessage();
                exit();
        }
	}
 ?>
