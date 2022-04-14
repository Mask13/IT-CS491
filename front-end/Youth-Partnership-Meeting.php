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
      <label for="Meeting/Event Duration">Meeting/Event Duration:</label><br>
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
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>
</html>

<?php
    include_once('navbar.php');
?>
<body>
  <div class="col">
    <form name="mainForm" method="post">
      <b>Youth General Information:</b> <br>
      <label for="firstName">First Name: </label>
      <input id="firstName" name="firstName" placeholder="First Name"/ required>
      <br>
      <label for="lastName">Last Name: </label>
      <input id="lastName" name="lastName" placeholder="Last Name"/ required>
      <br>
      Address:<br>
      <div class="col">
        <input name="street" id="street" placeholder="Street"><br>
        <input name="inputCity" id="inputCity" placeholder="City"><br>
        <input name="inputState" id="inputState" placeholder="State"><br>
        <input name="inputZip" id="inputZip" placeholder="Zip"><br>
        <input name="inputCounty" id="inputCounty" placeholder="County">
        <br><br>
      </div>
      <label for="email">Email: </label>
      <input type="email" id="email" name="email" placeholder="Email"/>
      <br>
      <label for="DOB">Date of Birth:</label>
      <input type="date" id="DOB" name="DOB" required>
      <br>
      <label for="homePhone">Home Phone Number:</label>
      <input type="tel" id="homePhone" name="homePhone">
      <br>
      <label for="cellPhone">Cell Phone Number:</label>
      <input type="tel" id="cellPhone" name="cellPhone">
      <br>
      <label for="CMOServices">Is the youth receiving services from the CMO?</label>
      <select name="CMOServices" required>
        <option disabled selected>Select an option</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
      <br>
      <b>Education:</b><br>
      Education Level:<br>
      <div class="col">
        <input type="checkbox" name="Education[]" value="Elementary"> Elementary School</input>
        <br>
        <input type="checkbox" name="Education[]" value="Middle"> Middle School</input>
        <br>
        <input type="checkbox" name="Education[]" value="High"> High School</input>
        <br>
        <input type="checkbox" name="Education[]" value="College"> College</input>
        <br>
        <input type="checkbox" name="Education[]" value="No College"> No College</input>
        <br>
      </div>
      <label for="Grade">Grade:</label>
      <input type="text" name="Grade">
      <br>
      <label for="School Name">School Name:</label>
      <input type="text" name="SchoolName">
      <br>
      School Address:<br>
      <div class="col">
        <input type="text" name="Schoolstreet" placeholder="Street"><br>
        <input type="text" name="Schoolcity" placeholder="City"><br>
        <input type="text" name="Schoolstate" placeholder="State"><br>
        <input type="text" name="Schoolzip" placeholder="Zip"><br>
        <input type="text" name="Schoolcounty" placeholder="County">
        <br><br>
      </div>
      <b>Health Information:</b><br>
      <div class="col">
        <input type="checkbox" name="Health[]" value="Allergic to peanuts"> Allergic to peanuts</input>
        <br>
        <input type="checkbox" name="Health[]" value="Allergic to Bee Stings"> Allergic to Bee Stings</input>
        <br>
        <input type="checkbox" name="Health[]" value="Asthma"> Asthma</input>
        <br>
        <input type="checkbox" name="Health[]" value="Developmental of learning disabilities"> Developmental of learning disabilities</input>
        <br>
        <input type="checkbox" name="Health[]" value="Diabetes"> Diabetes</input>
        <br>
        <input type="checkbox" name="Health[]" value="Taking medications regularly"> Taking medications regularly</input>
        <br>
        <label for="Other Allergy/Health Concern">Other Allergy/Health Concern:</label><br>
        <textarea form="mainForm" name="Health[]" rows="5" cols="80"></textarea>
        <br>
      </div><br>
      <b>Parent/Caregiver Contact Information:</b>
      <br>
      <label for="Relationship">Relationship:</label>
      <select name="Relationship">
        <option value="PrimaryCaregiver">Primary Caregiver</option>
        <option value="Sibling">Sibling</option>
        <option value="OtherAdultReletive">Other Adult Reletive</option>
        <option value="CommunityMember">Community Member</option>
        <option value="Other">Other</option>
      </select><br>
      <label for="ParentfirstName">First Name:</label>
      <input id="ParentfirstName" name="ParentfirstName" placeholder="First Name"/><br>
      <label for="ParentLastName">Last Name:</label>
      <input id="ParentLastName" name="ParentLastName" placeholder="Last Name"/><br>
	  <label for="ParentPhone">Phone Number:</label>
      <input id="ParentPhone" name="ParentPhone" placeholder="Phone Number"/><br>
      Address:<br>
      <div class="col">
        <input type="text" name="Parentstreet" placeholder="Street"><br>
        <input type="text" name="Parentcity" placeholder="City"><br>
        <input type="text" name="Parentstate" placeholder="State"><br>
        <input type="text" name="Parentzip" placeholder="Zip"><br>
        <input type="text" name="Parentcounty" placeholder="County">
        <br><br>
      </div>
      <label for="ParentEmail">Email: </label>
      <input name="ParentEmail" placeholder="Email"/><br>
      <b>Emergency Contact Information:</b>
      <br>
      Emergency Contact 1:<br>
      <label for="Emergency Contact 1 Name">Name:</label>
      <input id="Emergency Contact 1 Name" name="EmergencyName"/><br>
      <label for="homePhone">Phone:</label>
      <input type="tel" id="Emergency Contact 1 Phone" name="EmergencyPhone"><br>
      <label for="Emergency Contact 1 Relationship">Relationship:</label>
      <input type="text" name="EmergencyRelationship">
      <br>
      Emergency Contact 2:<br>
      <label for="Emergency Contact 2 Name">Name:</label>
      <input id="Emergency Contact 2 Name" name="EmergencyName2"/><br>
      <label for="homePhone">Phone:</label>
      <input type="tel" id="Emergency Contact 2 Phone" name="EmergencyPhone2"><br>
      <label for="Emergency Contact 2 Relationship">Relationship:</label>
      <input type="text" name="EmergencyRelationship2">
      <br>
      <b>Perosnal Goals:</b><br>
      <input type="checkbox" name="LifeGoals[]" value="Place to live"> Place to live</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Improving self-esteem"> Improving self-esteem</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Anger Management"> Anger Management</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Learning something new"> Learning something new</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Making friends"> Making friends</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Social Skills"> Social Skills</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Developing a positive attitude"> Developing a positive attitude</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Be more vocal in becoming an advocate"> Be more vocal in becoming an advocate</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Bring up grades"> Bring up grades</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Participate in School activities"> Participate in School activities</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Get a job"> Get a job</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Participate in activities outside of school"> Participate in activities outside of school</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Give back to my community"> Give back to my community</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Develop leadership skills"> Develop leadership skills</input>
      <br>
      <input type="checkbox" name="LifeGoals[]" value="Improve communication skills"> Improve communication skills</input>
      <br>
      <label for="Other Goals">Other Goals:</label><br>
      <textarea form="mainForm" name="LifeGoals[]" rows="5" cols="80"></textarea>
      <br><br>
      <b>Future Aspirations:</b>
      <br>
      <label for="Career of Interest 1">First Career of Interest:</label>
      <input type="text" name="CareerofInterest1">
      <br>
      <label for="Career of Interest 2">Second Career of Interest:</label>
      <input type="text" name="CareerofInterest2">
      <br>
      Learning Intrests:<br>
      <input type="checkbox" name="LearningInterests[]" value="Microsoft Word"> Microsoft Word</input>
      <br>
      <input type="checkbox" name="LearningInterests[]" value="Microsoft Excel"> Microsoft Excel</input>
      <br>
      <input type="checkbox" name="LearningInterests[]" value="Microsoft Powerpoint"> Microsoft Powerpoint</input>
      <br>
      <input type="checkbox" name="LearningInterests[]" value="Microsoft Publisher"> Microsoft Publisher</input>
      <br>
      <input type="checkbox" name="LearningInterests[]" value="Public Speaking"> Public Speaking</input>
      <br>
      <input type="checkbox" name="LearningInterests[]" value="Fundraising"> Fundraising</input>
      <br>
      <input type="checkbox" name="LearningInterests[]" value="Publishing"> Publishing</input>
      <br>
      <label for="Other Learning Interests">Other Learning Interests:</label><br>
      <textarea form="mainForm" name="LearningInterests[]" rows="5" cols="80"></textarea>
      <br>
      <b>General Interests</b><br>
      <input type="checkbox" name="GeneralInterests[]" value="Art"> Art</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Drama/Theater Arts"> Drama/Theater Arts</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Sports"> Sports</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Dance"> Dance</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Music"> Music</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Writing"> Writing</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Reading"> Reading</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Hanging out with friends"> Hanging out with friends</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Technology"> Technology</input>
      <br>
      <input type="checkbox" name="GeneralInterests[]" value="Community Service"> Community Service</input>
      <br>
      <label for="Other General Intrests">Other General Interests:</label><br>
      <textarea form="mainForm" name="GeneralInterests[]" rows="5" cols="80"></textarea>
      <br>
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

if($_POST){
	
	$db = new PDO($connection_string, $dbuser, $dbpass);
	
	//var_dump($_POST);
	//var_dump($_POST["firstName"]);
	
	$stmt = $db->prepare("INSERT INTO 'YouthPartnershipMeeting'
                                      VALUES( :"Date of Meeting" :"Meeting/Event Duration Minutes", :"Meeting/Event Duration Hours", :"Type of Meeting", :participants, :notes, :uid, DEFAULT)");
  if ($_POST["Participants"]){
			$participants_str = implode (", ", $_POST["Participants"]);
		}

		else{
			$participants_str = NULL;
		}
    
    $params = array(":Date of Meeting"=> $_POST["Date of Meeting"],":Meeting/Event Duration Minutes"=> $_POST["Meeting/Event Duration Minutes"], ":Meeting/Event Duration"=> $_POST["Meeting/Event Duration"], ":participants"=> $_POST["participants"],
						":notes"=> $_POST["notes"], ":uid"=>intval($_SESSION["ID"]));
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
	
