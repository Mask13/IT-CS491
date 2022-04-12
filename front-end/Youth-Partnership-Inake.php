<html lang="en" dir="ltr">
<style media="screen">
  purple{
    color: purple;
  }
</style>
<head>
  <meta charset="utf-8">
  <title>Youth Partnership Intake</title>
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
      <b>Youth General Information:</b> <br>
      <label for="firstName">First Name: </label>
      <input id="firstName" name="firstName" placeholder="First Name"/ required>
      <br>
      <label for="lastName">Last Name: </label>
      <input id="lastName" name="lastName" placeholder="Last Name"/ required>
      <br>
      Address:<br>
      <div class="col">
        <input type="street" id="autocomplete" placeholder="Street"><br>
        <input type="city" id="inputCity" placeholder="City"><br>
        <input type="state" id="inputState" placeholder="State"><br>
        <input type="zip" id="inputZip" placeholder="Zip"><br>
        <input type="county" id="inputCounty" placeholder="County">
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
      <input type="text" name="School Name">
      <br>
      School Address:<br>
      <div class="col">
        <input type="text" name="School street" placeholder="Street"><br>
        <input type="text" name="School city" placeholder="City"><br>
        <input type="text" name="School state" placeholder="State"><br>
        <input type="text" name="School zip" placeholder="Zip"><br>
        <input type="text" name="School county" placeholder="County">
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
        <label for="Other Allergy/Health Concern">Other Allergy/Health Concern:</label>
        <textarea form="mainForm" name="Other Allergy/Health Concern" rows="5" cols="80"></textarea>
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
      Address:<br>
      <div class="col">
        <input type="text" type="Parent street" placeholder="Street"><br>
        <input type="text" type="Parent city" placeholder="City"><br>
        <input type="text" type="Parent state" placeholder="State"><br>
        <input type="text" type="Parent zip" placeholder="Zip"><br>
        <input type="text" type="Parent county" placeholder="County">
        <br><br>
      </div>
      <label for="ParentEmail">Email: </label>
      <input name="ParentEmail" placeholder="Email"/><br>
      <b>Emergency Contact Information:</b>
      <br>
      Emergency Contact 1:<br>
      <label for="Emergency Contact 1 Name">Name:</label>
      <input id="Emergency Contact 1 Name" name="Emergency Contact 1 Name"/><br>
      <label for="homePhone">Phone:</label>
      <input type="tel" id="Emergency Contact 1 Phone" name="Emergency Contact 1 Phone"><br>
      <label for="Emergency Contact 1 Relationship">Relationship:</label>
      <input type="text" name="Emergency Contact 1 Relationship">
      <br>
      Emergency Contact 2:<br>
      <label for="Emergency Contact 2 Name">Name:</label>
      <input id="Emergency Contact 2 Name" name="Emergency Contact 2 Name"/><br>
      <label for="homePhone">Phone:</label>
      <input type="tel" id="Emergency Contact 2 Phone" name="Emergency Contact 2 Phone"><br>
      <label for="Emergency Contact 2 Relationship">Relationship:</label>
      <input type="text" name="Emergency Contact 2 Relationship">
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
      <label for="Other Goals">Other Goals:</label>
      <textarea form="mainForm" name="Other Goals" rows="5" cols="80"></textarea>
      <br><br>
      <b>Future Aspirations:</b>
      <br>
      <label for="Career of Interest 1">First Career of Interest:</label>
      <input type="text" name="Career of Interest 1">
      <br>
      <label for="Career of Interest 2">Second Career of Interest:</label>
      <input type="text" name="Career of Interest 2">
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
      <label for="Other Learning Interests">Other Learning Interests:</label>
      <textarea form="mainForm" name="Other Learning Interests" rows="5" cols="80"></textarea>
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
      <label for="Other General Intrests">Other General Interests:</label>
      <textarea form="mainForm" name="Other General Interests" rows="5" cols="80"></textarea>
      <br>
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>
</html>
