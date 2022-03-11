<!DOCTYPE html>
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
if(isset($_POST['username']) && isset($_POST['password'])){
	$pass = $_POST['password'];
	//$pass = password_hash($pass, PASSWORD_BCRYPT);
	require("config.php");
    $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
	
	Try{
		 $stmt = $db->prepare("SELECT username, password, id from `users` where username = :username LIMIT 1");
		 $params = array(":username"=> $userName);
         $stmt->execute($params);
		 $result = $stmt->fetch(PDO::FETCH_ASSOC);
	}
	finally{}
	if($result){
		$userpassword = $result['password'];
		 if(password_verify($pass, $userpassword)){
            //$_SESSION['IsAdmin'] = $result['IsAdmin'];
            $_SESSION['UID'] = $result['UID'];
			 echo'<html><script type="text/javascript">window.open("register.php","_self");</script></html>';
		 }
	}
	
	
}


?>