<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id= container>
      <font size="7">
      <center><form name="loginform" id="myForm" method="POST"><br>
          <center style="font-size: 50px; position: relative; color:white" > You have Logged Out.</center><br>
          <center style="font-size: 15px; position: relative; color:gray" > Click on Login to Log back in.</center><br>
          <button style="position: relative; bottom: 20px;"class = "button" onclick="location.href = 'index.php';"
            type="button" name="Login"> Login</button>
  		</form></center>
    </div>
	</body>
</html>
<?php
session_start();
session_unset();
session_destroy();

//get session cookie and delete/clear it for this session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
	//clones then destroys since it makes it's lifetime
	//negative (in the past)
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
?>
