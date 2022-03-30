<?php
require("config.php");
session_start();

if(isset($_SESSION['ID'])){
  header("Location: home.php");
}
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <font size="9">
        <center><form name="loginform" id="myForm" method="POST">
            <center style="font-family:Avant Garde;" > Login:</center>
    			  <input type="username" id="username" name="username" placeholder="Enter Username"/><br>
    			  <input type="password" id="pass" name="password" placeholder="Enter Password"/><br>
          <input class= "button" type="submit" value="Login"/>
    		</form></center><font>
  </body>
</html>

<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

if(isset($_POST['username']) && isset($_POST['password'])){
	$pass = $_POST['password'];
	$username = $_POST['username'];
	//$pass = password_hash($pass, PASSWORD_BCRYPT);

    $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
	$db = new PDO($connection_string, $dbuser, $dbpass);

	Try{
		 $stmt = $db->prepare("SELECT username, password, id from `users` where username = :username LIMIT 1");
		 $params = array(":username"=> $username);
         $stmt->execute($params);
		 $result = $stmt->fetch(PDO::FETCH_ASSOC);
	}

	catch(Exception $e){
		echo $e->getMessage();
		exit();
	}

	//var_dump($result);
	//finally{}
	if($result){
		$userpassword = $result['password'];
		 if(password_verify($pass, $userpassword)){
            //$_SESSION['IsAdmin'] = $result['IsAdmin'];
            $_SESSION['ID'] = $result['id'];
			echo "<script> ; window.location.href='home.php'; </script>";
			 //echo'<html><script type="text/javascript">window.open("register.php","_self");</script></html>';
			 //header("Location: register.php");
		 }

		 else{
			 echo "something wrong mate";
		 }
	}

	else{
			 echo "something wrong ";
		 }


}


?>
