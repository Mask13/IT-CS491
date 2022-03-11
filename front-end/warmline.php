<!DOCTYPE html>
<html lang="en" dir="ltr">
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
  <body>
    <form name="Warmlines" id="Warmlines" method="POST">
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
      <br>
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
      <select name="TypeOfCaller">
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

      <input type="checkbox" name="Food" value="Food">
      <label for="Food">Food</label><br>

      <input type="checkbox" name="MentalHealth" value="Mental Health">
      <label for="MentalHealth">Mental Health</label><br>

      <input type="checkbox" name="Transportation" value="Transportation">
      <label for="Transportation">Transportation</label><br>

      <input type="checkbox" name="DomesticViolence" value="DomesticViolence">
      <label for="DomesticViolence">Domestic Violence</label><br>

      <input type="checkbox" name="MedicalInformation" value="MedicalInformation">
      <label for="MedicalInformation">Medical Information</label><br>

      <input type="checkbox" name="Shelter" value="Shelter">
      <label for="Shelter">Shelter</label><br>

      <input type="checkbox" name="School" value="School">
      <label for="School">School</label><br>

      <input type="checkbox" name="Leagal" value="Leagal">
      <label for="Leagal">Leagal</label><br>

      <input type="checkbox" name="Housing" value="Housing">
      <label for="Housing">Housing</label><br>

      <input type="checkbox" name="Employment" value="Employment">
      <label for="Employment">Employment</label><br>

      <input type="checkbox" name="Custody" value="Custody">
      <label for="Custody">Custody</label><br>

      <input type="checkbox" name="FamilySatisfactionSurvey" value="FamilySatisfactionSurvey">
      <label for="FamilySatisfactionSurvey">Family Satisfaction Survey</label><br>

      <input type="checkbox" name="DDD" value="DDD">
      <label for="DDD">DDD</label><br>

      <input type="checkbox" name="SubstanceRelated" value="SubstanceRelated">
      <label for="SubstanceRelated">Substance Related Issue/Program</label><br>

      <input type="checkbox" name="SubstanceAbuseRelated" value="SubstanceAbuseRelated">
      <label for="SubstanceAbuseRelated">Substance Abuse Related/Treatment</label><br>

      <font size="3"> Resources/Referrals: </font><br>

      <input type="checkbox" name="NewsLetter" value="NewsLetter">
      <label for="NewsLetter">News Letter</label><br>

      <input type="checkbox" name="Workshop" value="Workshop">
      <label for="Workshop">Workshop</label><br>

      <input type="checkbox" name="FamilySupport" value="FamilySupport">
      <label for="FamilySupport">Family Support</label><br>

      <input type="checkbox" name="YouthPartnership" value="YouthPartnership">
      <label for="YouthPartnership">Youth Partnership</label><br>

      <input type="checkbox" name="Presentation" value="Presentation">
      <label for="Presentation">Presentation</label><br>

      <input type="checkbox" name="Training" value="Training">
      <label for="Training">Training</label><br>

      <input type="checkbox" name="SupportGroup" value="SupportGroup">
      <label for="SupportGroup">Support Group</label><br>

      <input type="checkbox" name="SupportTelephoneCouseling" value="SupportTelephoneCouseling">
      <label for="SupportTelephoneCouseling">Support Telephone Counseling</label><br>

      <input type="checkbox" name="OtherCommunityResource" value="OtherCommunityResource">
      <label for="OtherCommunityResource">Other Community Resource</label><br>

      <input type="checkbox" name="PreformCare" value="PreformCare">
      <label for="PreformCare">Preform Care</label><br>

      <input type="checkbox" name="DDD" value="DDD">
      <label for="DDD">DDD</label><br>

      <input type="checkbox" name="SubstanceRelated" value="SubstanceRelated">
      <label for="SubstanceRelated">Substance Related Issue/Program</label><br>

      <input type="checkbox" name="SubstanceAbuseRelated" value="SubstanceAbuseRelated">
      <label for="SubstanceAbuseRelated">Substance Abuse Related/Treatment</label><br>

      <input type="checkbox" name="PEP" value="PEP">
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

      <label for="TimeSpentSupport">Time Spent - Warmline Contact</label>
      <input type="number" name="TimeSpentSupport"> Minutes</input><br>
    </form>
  </body>
</html>
