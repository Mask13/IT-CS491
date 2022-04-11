<html lang="en" dir="ltr">
  <style media="screen">
    purple{
      color: purple;
    }
  </style>
  <head>
    <meta charset="utf-8">
    <title>FANS Assesment</title>
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
      <form name="mainForm" id= method="post">
        <label for="noteTime">Note Time:</label>
        <input type="datetime-local" name="noteTime" required/>
        <br>
        <label for="duration">Duration in Minutes:</label>
        <input type="number" name="duration"required/>
        <br>
        <label for="noteType">Note Type:</label>
        <select name="noteType">
          <option disabled selected>Select an option</option>
          <option value="FSO:Child/FamilyParticipation">FSO:Child/Family Participation</option>
          <option value="FSO:CollateralContacts">FSO:Collateral Contacts</option>
          <option value="FSO:ContactFamily">FSO:Contact with Family</option>
          <option value="FSO:FsoTeamMeeting">FSO:FSO Team Meeting</option>
          <option value="FSO:InitialFacetoFaceVisit">FSO:Initial Face to Face Visit </option>
          <option value="FSO:OngoingFacetoFace">FSO:Ongoing Face to Face </option>
          <option value="FSO:Transition">FSO:Transition </option>
          <option value="Telehealth:Audio">Telehealth:Audio Only </option>
          <option value="Telehealth:Audiovisual">Telehealth:Audiovisual </option>
        </select>
        <br>
        <label for="Note">Progress Note:</label>
        <br>
        <textarea form="mainForm" name="APFamilyComm" rows="5" cols="80"></textarea>
        <br><br>
        <label for="contactLocation">Contact Location:</label>
        <select name="contactLocation"required>
          <option disabled selected>Select an option</option>
          <option value="Program Site">At Program Stie</option>
          <option value="Church">Church</option>
          <option value="Court">Court</option>
          <option value="Familys Residence">Family's Residence</option>
          <option value="Hospital">Hospital</option>
          <option value="Meet and Greet">Meet and Greet</option>
          <option value="Meeting">Meeting</option>
          <option value="Other Location in the Community">Other Location in the Community</option>
          <option value="Partner Agency">Partner Agency</option>
          <option value="School">School</option>
        </select><br>
        <label for="EncourageAdvocacy">Encourage Advocacy/Legacy:</label>
        <select name="EncourageAdvocacy"required>
          <option disabled selected>Select an option</option>
          <option value="Not Evaluated">Not Evaluated</option>
          <option value="I never speak">I never speak up at CFT/IEP meetings</option>
          <option value="I rarely speak">I rarely speak up at CFT/IEP meetings</option>
          <option value="I sometimes speak">I sometimes speak up at CFT/IEP meetings</option>
          <option value="I often speak">I ofen speak up at CFT/IEP meetings</option>
          <option value="I always speak">I always speak up at CFT/IEP meetings</option>
          <option value="Proactive">I am proactive in resolving issues</option>
          <option value="strong advocate">I am a string advocate for my child and family</option>
          <option value="work to empower others">I work to empower other families</option>
          <option value="work to have impact">I work to have an impact on the system of care</option>
        </select>
        <br>
        <label for="supportlevel">Support Level</label>
        <select name="supportlevel"required>
          <option disabled selected>Select an option</option>
          <option value="New Family">New Family</option>
          <option value="Not Engaged">Not Engaged</option>
          <option value="Intensive">Intensive</option>
          <option value="Moderate">Moderate</option>
          <option value="Supportive">Supportive</option>
          <option value="Transitioned">Transitioned</option>
          <option value="Engaged">Engaged</option>
          <option value="Engaged at First">Engaged at First Face to Face</option>
        </select>
        <br>
        <label for="startingLocation">Starting Location:</label>
        <input type="text" name="startingLocation"/>
        <br>
        <label for="endingLocation">Ending Location:</label>
        <input type="text" name="endingLocation"/>
        <br>
        <label for="mileage">Mileage:</label>
        <input type="number" name="mileage"required/>
        <br>
        <label for="TravelTime">Travel Time(Minutes):</label>
        <input type="number" name="TravelTime"/>
        <br>
        <label for="RecordKeepingTime">Record Keeping Time(Minutes):</label>
        <input type="number" name="RecordKeepingTime"/>
        <br>
        <label for="service">Service:</label>
        <select name="service"required>
          <option disabled selected>Select an option</option>
          <option value="weekly">Weekly</option>
          <option value="Bi-weekly">Bi-Weekly</option>
          <option value="Monthly">Monthly</option>
        </select>
        <br>
        <input type="file" id="myFile" name="filename"/><br><br>
        <input type="submit">
      </form>
    </div>
  </body>
</html>
