<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
  </head>
  <body>
    <form name="Intake" id="Intake" method="POST">
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

      <input type="submit" name="register"/>
    </form>
  </body>
</html>
