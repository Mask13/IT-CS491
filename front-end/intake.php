<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <button style= "float:right;"type="button" onclick="location.href = 'logout.php';"
          name="Login"> Logout
    </button>
    <button style= "float:right;"type="button" onclick="location.href = 'home.html';"
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
      <input type="tel" id="homePhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="homePhone"><br>
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

      <input type="checkbox" name="ImpulseControl" value="ImpulseControl">
      <label for="ImpulseControl">ImpulseControl</label><br>

      <input type="checkbox" name="AdjustmentDisorder" value="AdjustmentDisorder">
      <label for="AdjustmentDisorder">Adjustment Disorder</label><br>

      <input type="checkbox" name="AttentionDeficient" value="AttentionDeficient">
      <label for="AttentionDeficient">Attention Deficient</label><br>

      <input type="checkbox" name="Schizophrenia" value="Schizophrenia">
      <label for="Schizophrenia">Schizophrenia</label><br>

      <input type="checkbox" name="MoodDisorder" value="MoodDisorder">
      <label for="MoodDisorder">Mood Disorder</label><br>

      <input type="checkbox" name="PervasiveDev" value="PervasiveDev">
      <label for="PervasiveDev">Pervasive Development Disorder</label><br>

      <input type="checkbox" name="AnxientyDisorder" value="AnxientyDisorder">
      <label for="AnxientyDisorder">Anxienty Disorder</label><br>

      <input type="checkbox" name="SubstanceRelated" value="SubstanceRelated">
      <label for="SubstanceRelated">Substance Related</label><br>

      <input type="checkbox" name="OtherDisorder" value="OtherDisorder">
      <label for="OtherDisorder">Other Disorder</label><br>

      <input type="checkbox" name="OtherCondition" value="OtherCondition">
      <label for="OtherCondition">Other Condition</label><br>

      <input type="checkbox" name="BiPolar" value="BiPolar">
      <label for="BiPolar">Bi Polar</label><br>

      <input type="checkbox" name="OCD" value="OCD">
      <label for="OCD">OCD</label><br>

      <input type="checkbox" name="DDD" value="DDD">
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

      <label for="DCPPYes">DCPP Involment:</label>
      <input type="radio" name="DCPPYes" value="DCPPYes">Yes </input>
      <input type="radio" name="DCPPNo" value="DCPPNo"> No </input><br>

      <label for="DCPPYes">Court Involment:</label>
      <input type="radio" name="CourtYes" value="CourtYes">Yes </input>
      <input type="radio" name="CourtPNo" value="CourtNo">No </input><br>
      <input type="submit" name="register"/>
    </form>
  </body>
</html>
