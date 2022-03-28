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
      <label for="prompt">The FSO staff provided services promptly and efficiently.</label>
      <br>
      <select name="prompt">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="curteous">The FSO staff was curteous and professional.</label>
      <br>
      <select name="curteous">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="informed">The FSO staff was informed or made an effort to get the information needed to assist me.</label>
      <br>
      <select name="informed">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="answerQuestions">The FSO staff was knowledgable and able to answer my questions.</label>
      <br>
      <select name="answerQuestions">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="advocacySkills">The FSO staff model self-advocacy skills for me.</label>
      <br>
      <select name="advocacySkills">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="progress">The services that I received helped me to make progress towards my family's goals.</label>
      <br>
      <select name="progress">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="qualityOfLife">The quality of life in our home has improved as a result of the services provided by the FSO.</label>
      <br>
      <select name="qualityOfLife">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="recommend">I would recommend the FSO services to other families.</label>
      <br>
      <select name="recommend">
        <option value="NA">Select an Option</option>
        <option value="Strongly Agree">Strongly Agree</option>
        <option value="Agree">Agree</option>
        <option value="Neutral">Neutral</option>
        <option value="Disagree">Disagree</option>
        <option value="Strongly Disagree">Strongly Disagree</option>
      </select><br>
      <label for="professional">The FSO staff was courteous and professional.</label>
      <br>
      <select name="professional">
        <option value="NA">Select an Option</option>
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
