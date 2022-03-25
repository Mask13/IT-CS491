<?php
require("config.php");
session_start();
$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
 ?>


<!DOCTYPE html>
<html>
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
    font2{
      font-size: 17px;
      display: inline-block;
      margin-top: 5px;
      margin-bottom: 5px;
    }
  </style>
  <head>
    <title>Register</title>
    <button style= "float:right;"type="button" onclick="location.href = 'logout.php';"
          name="Login"> Logout
    </button>
    <button style= "float:right;"type="button" onclick="location.href = 'home.php';"
          name="Login"> Home
    </button>
  </head>
  <body>
    <form name="Intake" id="Intake" method="POST">
      <font size="5"> Program Enrollmnet:</font><br>
      <label for="ProgramStartDate">Program Start Date:</label>
      <input type="date" name="ProgramStartDate"><br>
      <font size="5"> Add New Participant:</font><br>
      <label for="caseNumber">Case Number: </label>
      <input id="caseNumber" name="caseNumber" placeholder="Case Number"/><br>
      <label for="prefix">Prefix:</label>
      <select name="prefix">
        <option value="Mr.">Mr.</option>
        <option value="Ms.">Ms.</option>
        <option value="Mrs.">Mrs.</option>
        <option value="Dr.">Dr.</option>
        <option value="Hon.">Hon.</option>
        <option value="Rev.">Rev.</option>
        <option value="Sr.">Sr.</option>
        <option value="Br.">Br.</option>
        <option value="Rabbi">Rabbi</option>
      </select><br>
      <label for="firstName">First Name: </label>
      <input id="firstName" name="firstName" placeholder="First Name"/><br>
      <label for="middleName">Middle Name: </label>
      <input id="middleName" name="middleName" placeholder="Middle Name"/><br>
      <label for="lastName">Last Name: </label>
      <input id="lastName" name="lastName" placeholder="Last Name"/><br>
      <label for="Address1">Address 1: </label>
      <input id="Address1" name="Address1" placeholder="Address 1"/><br>
      <label for="Address2">Address 2: </label>
      <input id="Address2" name="Address2" placeholder="Address 2"/><br>
      <label for="zipCode">Zip Code: </label>
      <input id="zipCode" name="zipCode" placeholder="Zip Code"/><br>
      <label for="email">Email: </label>
      <input id="email" name="email" placeholder="Email"/><br>
      <label for="DOB">Date of Birth:</label>
      <input type="date" id="DOB" name="DOB"><br>
      <label for="Gender">Gender:</label>
      <select name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select><br>
      <label for="race">Race:</label>
      <select name="race">
        <option value="African-American">African-American</option>
        <option value="Asian">Asian</option>
        <option value="Bi-Racial">Bi-Racial</option>
        <option value="Caucasian">Caucasian</option>
        <option value="Hawaiian or Pacicfic Islander">Hawaiian or Pacicfic Islander</option>
        <option value="Hispanic">Hispanic</option>
        <option value="Multi-Racial">Multi-Racial</option>
        <option value="Native American">Native American</option>
      </select><br>
      <label for="maritalStatus">Marital Status:</label>
      <select name="maritalStatus">
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="Widowed">Widowed</option>
        <option value="Separated">Separated</option>
        <option value="Divorced">Divorced</option>
        <option value="Domestic Partner">Domestic Partner</option>
        <option value="Common Law">Common Law</option>
      </select><br>
      <label for="homePhone">Home Phone:</label>
      <input type="tel" id="homePhone" name="homePhone"><br>
      <label for="careManager">Care Manager:</label>
      <select name="careManager">
        <option value="Single">Sample</option>
      </select><br>
      <label for="DYFSContact">DYFS Contact:</label>
      <select name="DYFSContact">
        <option value="Single">Sample</option>
      </select><br>
      <label for="referedby">Refered By:</label>
      <select name="referedby">
        <option value="DD">DD</option>
        <option value="DMHS">DMHS</option>
        <option value="JJC">JJC</option>
        <option value="Juvenile">Juvenile</option>
        <option value="School">School</option>
        <option value="MentalHealthProvider">Mental Health Provider</option>
        <option value="MobileResponse">Mobile Response</option>
        <option value="Other">Other</option>
        <option value="Parent">Parent</option>
        <option value="CCIS">CCIS</option>
        <option value="DCPP">DCPP</option>
        <option value="PreformCare">Prefrom Care</option>
        <option value="CMO">CMO</option>
        <option value="NJAlliance">NJ Alliance FSO</option>
        <option value="Community">Community</option>
      </select><br>
      <label for="familyMemberRole">Family Member Role:</label>
      <select name="familyMemberRole">
        <option value="PrimaryCaregiver">Primary Caregiver</option>
        <option value="CMOChild">CMO Child</option>
        <option value="Sibling">Sibling</option>
        <option value="OtherAdultReletive">Other Adult Reletive</option>
        <option value="Youth">Youth</option>
        <option value="CommunityMember">Community Member</option>
        <option value="CallingOnBehalfOfParent">Calling On Behalf Of Parent</option>
        <option value="Other">Other</option>
      </select><br>
      <font size="5"> Demographic Information: </font><br>
      <label for="PriamryLanguage">Primary Language:</label>
      <select name="PriamryLanguage">
        <option value="English">English</option>
        <option value="Spanish">Spanish</option>
        <option value="CreoleHaitian">Creole Haitian</option>
        <option value="Arabic">Arabic</option>
        <option value="Other">Other</option>
      </select><br>
      <label for="OtherLanguage">Other Language:</label>
      <input name = "OtherLanguage"/><br>
      <label for="ChildrenReceivingServices">Children Receiving Services:</label>
      <input type="text" name = "ChildrenReceivingServices"/><br>
      <font size="5"> Only Answer This Section On CMO Child's Record:</font><br>
      <label for="CyberNumber">Cyber Number:</label>
      <input type="text" name = "CyberNumber"/><br>
      <label for="childsLevelofCare">Child Level of Care:</label>
      <select name="childsLevelofCare">
        <option value="CMO">CMO</option>
      </select><br>

      <label for="ChildsPlacement">Childs Placement:</label>
      <select name="ChildsPlacement">
        <option value="Home">Home</option>
        <option value="FosterHome">FosterHome</option>
        <option value="GroupHome">Group Home</option>
        <option value="Relative">Relative</option>
        <option value="RTC">RTC</option>
        <option value="Shelter">Shelter</option>
        <option value="TheraputicFosterCare">Theraputic Foster Care</option>
        <option value="TreatmentHome">Treatment Home</option>
        <option value="IncarcerationJCC">Incarceration/JCC</option>
        <option value="Runaway">Run Away</option>
        <option value="PsychiatricCommunity">Psychiatric Community</option>
        <option value="CCIS">CCIS</option>
        <option value="IntensiveTreatment">Intensive Res. Treatment Svcs</option>
        <option value="IndependentLiving">Independent Living</option>
        <option value="YouthDetentionCenter">Youth Detention Center</option>
        <option value="Other">Other</option>
      </select><br>

      <font size="3"> Childs Diagnosis: </font><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="ImpulseControl">
      <label for="ImpulseControl">ImpulseControl</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="AdjustmentDisorder">
      <label for="AdjustmentDisorder">Adjustment Disorder</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="AttentionDeficient">
      <label for="AttentionDeficient">Attention Deficient</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="Schizophrenia">
      <label for="Schizophrenia">Schizophrenia</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="MoodDisorder">
      <label for="MoodDisorder">Mood Disorder</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="PervasiveDev">
      <label for="PervasiveDev">Pervasive Development Disorder</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="AnxientyDisorder">
      <label for="AnxientyDisorder">Anxienty Disorder</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="SubstanceRelated">
      <label for="SubstanceRelated">Substance Related</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="OtherDisorder">
      <label for="OtherDisorder">Other Disorder</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="OtherCondition">
      <label for="OtherCondition">Other Condition</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="BiPolar">
      <label for="BiPolar">Bi Polar</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="OCD">
      <label for="OCD">OCD</label><br>

      <input type="checkbox" name="ChildsDiagnosis[]" value="DDD">
      <label for="DDD">DDD</label><br>

      <label for="ChildEnrollmentDate">Child Enrollment Date:</label>
      <input type="date" name="ChildEnrollmentDate"/><br>

      <label for="CMODischargeDate">CMO Discharge Date:</label>
      <input type="date" name="CMODischargeDate"/><br>

      <label for="CMODischargeStatus">CMO Discharge Status:</label>
      <select name="CMODischargeStatus">
        <option value="T1">T1:Child/Family successfully complete program</option>
        <option value="T2">T2:Family/child declined services</option>
        <option value="T3">T3:Attempts to engage family proved unsuccesful and/or non-complience with services</option>
        <option value="T4">T4:Child Missing</option>
        <option value="T5">T5:Child Transitioned to adult services</option>
        <option value="T6">T6:Family moved out of geographic area</option>
        <option value="T7">T7:Family requested discharge</option>
        <option value="T8">T8:Child Sentenced to Jamesburg(TSB) or prison</option>
        <option value="T9">T9:PCE Services not appropriate</option>
        <option value="T10">T10:Refering agency requested discharge</option>
        <option value="T11">T11:N/A</option>
        <option value="T12">T12:Deceased</option>
      </select><br>

      <label for="DCPP">DCPP Involvement:</label>
      <input type="radio" name="DCPP" value="Yes">Yes </input>
      <input type="radio" name="DCPP" value="No"> No </input><br>

      <label for="CourtInvolvement">Court Involvement:</label>
      <input type="radio" name="CourtInvolvement" value="Yes">Yes </input>
      <input type="radio" name="CourtInvolvement" value="No">No </input><br>
      <input type="submit" name="register"/>
    </form>
  </body>
</html>

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

if($_POST){
	//var_dump($_POST);
	//var_dump($_POST["firstName"]);

	try{
		$db = new PDO($connection_string, $dbuser, $dbpass);

		if( $_POST['CyberNumber'] != NULL){

			if ($_POST["ChildsDiagnosis"]){
			$child_str = implode (", ", $_POST["ChildsDiagnosis"]);
			}

			else{
				$child_str = NULL;
			}
			$stmt = $db->prepare("INSERT INTO `family`
                        VALUES (:firstname, :lastname, :prefix, :middlename, DEFAULT, :address1, :address2, :zip,
								:email,:dob,:gender,:race,:maritalstatus, :homephone,:referred,:familymemberrole,
								:primarylanguage, :otherlanguage, :childrenreceivingservices, :cybernumber,:childlevelcare,:childplacement,:childDiagnosis,
								:childenrollmentedate, :cmodischargedate, :cmostatus, :dcppinvolvement, :courtinvolvement)");

		$params = array(":firstname"=> $_POST["firstName"],":lastname"=> $_POST["lastName"], ":prefix"=> $_POST["prefix"],
						":middlename"=> $_POST["middleName"],":address1"=> $_POST["Address1"], ":address2"=> $_POST["Address2"], ":zip"=> $_POST["zipCode"],
						":email"=> $_POST["email"], ":dob"=> $_POST["DOB"], ":gender"=> $_POST["Gender"], ":race"=> $_POST["race"],
						":maritalstatus"=> $_POST["maritalStatus"], ":homephone"=> $_POST["homePhone"], ":referred"=> $_POST["referedby"],
						":familymemberrole"=> $_POST["familyMemberRole"], ":primarylanguage"=> $_POST["PriamryLanguage"], ":otherlanguage"=> $_POST["OtherLanguage"],
						":childrenreceivingservices"=> $_POST["ChildrenReceivingServices"],":cybernumber"=> $_POST["CyberNumber"],":childlevelcare"=> $_POST["childsLevelofCare"],
						":childplacement"=> $_POST["ChildsPlacement"],":childDiagnosis"=> $child_str,":childenrollmentedate"=> $_POST["ChildEnrollmentDate"],
						":cmodischargedate"=> $_POST["CMODischargeDate"],":cmostatus"=> $_POST["CMODischargeStatus"],":dcppinvolvement"=> $_POST["DCPP"],":courtinvolvement"=> $_POST["CourtInvolvement"]);
		}
		else {

		 $stmt = $db->prepare("INSERT INTO `family`
                        VALUES (:firstname, :lastname, :prefix, :middlename, DEFAULT, :address1, :address2, :zip,
								:email,:dob,:gender,:race,:maritalstatus, :homephone,:referred,:familymemberrole,
								:primarylanguage, :otherlanguage, :childrenreceivingservices)");

		$params = array(":firstname"=> $_POST["firstName"],":lastname"=> $_POST["lastName"], ":prefix"=> $_POST["prefix"],
						":middlename"=> $_POST["middleName"],":address1"=> $_POST["Address1"], ":address2"=> $_POST["Address2"], ":zip"=> $_POST["zipCode"],
						":email"=> $_POST["email"], ":dob"=> $_POST["DOB"], ":gender"=> $_POST["Gender"], ":race"=> $_POST["race"],
						":maritalstatus"=> $_POST["maritalStatus"], ":homephone"=> $_POST["homePhone"], ":referred"=> $_POST["referedby"],
						":familymemberrole"=> $_POST["familyMemberRole"], ":primarylanguage"=> $_POST["PriamryLanguage"], ":otherlanguage"=> $_POST["OtherLanguage"],
						":childrenreceivingservices"=> $_POST["ChildrenReceivingServices"]);
		}
		#var_dump($_POST);
		$stmt->execute($params);
		#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
		$id = intval($db->lastInsertId());

		$stmt1 = $db->prepare("INSERT INTO `cases` VALUES (:programstartdate, :casenumber, :caremanager, :dyfscontact, :id, DEFAULT)");

		$params1 = array(":programstartdate"=> $_POST["ProgramStartDate"],":casenumber"=> $_POST["caseNumber"],":caremanager"=> $_POST["careManager"],
						":dyfscontact"=> $_POST["DYFSContact"], ":id"=> $id);
		$stmt1->execute($params1);

		#var_dump($id);
        #echo "<pre>" . var_export($stmt1->errorInfo(), true) . "</pre>";
        }
        catch(Exception $e){
                echo $e->getMessage();
                exit();
        }
	}



?>
