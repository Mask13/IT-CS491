<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
  </head>
  <body>
    <form name="RegisterForm" id="RegisterForm" method="POST">
      <label for="email">Username: </label>
      <input id="username" name="username" placeholder="Enter Username"/>
      <label for="pass">Password: </label>
      <input id="password" type="password" name="password" placeholder="test"/>
	  <label for= "FSO">Select FSO of the User: </label>
      <select name = "FSO">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	  <option value="11">11</option>
	  <option value="12">12</option>
	  <option value="13">13</option>
	  <option value="14">14</option>
	  <option value="15">15</option>
      <br>
      <br>
      </select>
	  
	  <label for= "role">Select the Role of the User: </label>
      <select name = "role">
      <option value="1">Placeholder 1</option>
      <option value="2">Placeholder 2</option>
      <option value="3">Placeholder 3</option>
      <option value="4">Placeholder 4</option>

      <br>
      <br>
      </select>
      <input type="submit" name="register"/>
    </form>
  </body>
</html>
<?php
//ini_set('display_errors',1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

if(        isset($_POST['username'])
        && isset($_POST['password'])
        ){
        $pass = $_POST['password'];
        //let's hash it
        $pass = password_hash($pass, PASSWORD_BCRYPT);
        //echo "<br>$pass<br>";
        //it's hashed
        require("config.php");
        $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
        try {
                $db = new PDO($connection_string, $dbuser, $dbpass);
                $stmt = $db->prepare("INSERT INTO `users` 
					VALUES (:username, :password, :role, DEFAULT,:fso_id)");
                $username = $_POST['username'];
        $params = array(":username"=> $username, ":password"=> $pass, ":role"=> $_POST["role"], ":fso_id"=> $_POST["FSO"]);
        $stmt->execute($params);
        echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
        }
        catch(Exception $e){
                echo $e->getMessage();
                exit();
        }
}
?>
