<?php

session_start();

require ("config.php");

if(!(isset($_SESSION['role']))){

  header("Location: index.php");

}

if(!($_SESSION['role']>=0)){

  header("Location: index.php");

}

?>

<html>
  	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Change Password</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>

	<?php
		include_once('navbar.php');
	?><br>
	<style>
  
		body{
      background-image: url("https://lh3.googleusercontent.com/_uLtK2p65lwRVcqkAa-jenk95kdYIGr9-tHHh3rJnHLXsWzjHf6mgEOZFqykyFr7XtLSVsk_aBjOmS-ZMb8=s1600");
    }
		.button {
			background-color: gray;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
	</style>
  <body>
	<div class="col">
		<form method="post">
		<label for="pass">Current Password: </label>
		<input type="password" id="pass" name="password" placeholder="Enter curent password"/>
		<br><br>
		<label for="pass">New Password: </label>
		<input type="password" id="newPass" name="newPassword" placeholder="Enter new password"/>
		<br><br>
		<lable for ="conf"> Confirm Password:</lable>
		<input type ="password" id= "conf" name="confirm" placeholder = Confirm passowrd/>
		<br><br>
		<input type="submit" value="Change Password" style="height:50px; width:150px" />
		</form>
	</div>
  </body>
</html>

<?php
	if( isset($_POST['password'])
        && isset($_POST['newPassword'])
        && isset($_POST['confirm'])
        ){
          require("config.php");
          $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
          $db = new PDO($connection_string, $dbuser, $dbpass);
          $pass = $_POST['newPassword'];
          $conf = $_POST['confirm'];
          $oldpass = $_POST['password'];
          $id = $_SESSION["ID"];
          $oldpass = password_hash($oldpass, PASSWORD_BCRYPT);
          if($pass == $conf){
                  $msg = "All good, your password is changed";
          }
          else{
            echo "passwords dont match";
            exit();
          }
          $passhash = password_hash($pass, PASSWORD_BCRYPT);
          try {
              $stmt = $db->prepare("UPDATE `users`
                      SET password = :password
                      WHERE id= :id ");
              $params = array(":password"=> $passhash, ":id"=> (int)$id);
              $r = $stmt->execute($params);
            }
        catch(Exception $e){
              echo $e->getMessage();
              exit();
        }
}
?>