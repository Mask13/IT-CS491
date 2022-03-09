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
      <input id="password" type="password" name="password" placeholder="Enter Password"/>
      <input type="submit" name="register"/>
    </form>
  </body>
</html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(        isset($_POST['email'])
        && isset($_POST['password'])
        && isset($_POST['confirm'])
        ){
        $pass = $_POST['password'];
        $conf = $_POST['confirm'];
        if($pass == $conf){
                //echo "All good, 'registering user'";
                $msg = "All good, your registered";
        }
        else{

                exit();
        }
        //let's hash it
        $pass = password_hash($pass, PASSWORD_BCRYPT);
        echo "<br>$pass<br>";
        //it's hashed
        require("config.php");
        $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
        try {
                $db = new PDO($connection_string, $dbuser, $dbpass);
                $stmt = $db->prepare("INSERT INTO `Coustomers`
                        (email, password) VALUES
                        (:email, :password)");
                $email = $_POST['email'];
        $params = array(":email"=> $email, ":password"=> $pass);
        $stmt->execute($params);
        echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
        }
        catch(Exception $e){
                echo $e->getMessage();
                exit();
        }
}
?>
