  <?php
      include_once('navbar.php');
  ?>

<html lang="en" dir="ltr">
	<head>
		<title>display_warm</title>
	</head>

</html>
<?php

	if(!(isset($_SESSION['role']))){
  header("Location: index.php");
}
	if(!($_SESSION['role']>=0)){
	header("Location: index.php");
	}
	   error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	   ini_set('display_errors', 1);
	   require "config.php";
       $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
       $db= new PDO($connection_string, $dbuser, $dbpass);
	   echo "<br>";
	   echo "<table border='1'>";
       try{
		   $q = $db->prepare("DESCRIBE warmline");
		   $q->execute();
		   $table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
		   foreach ($table_fields as $col_name) {
			   echo "<td>" .$col_name."</td>";
			   }
			   $stmt = $db->prepare('SELECT * FROM warmline WHERE uid=:u_id');
			   $stmt->execute(['u_id' => intval($_SESSION["ID"])]);
			   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			   foreach ($data as $row) {
				   echo "<tr>";
				   foreach ($row as $value){
						 echo "<td>" . $value . "</td>";
						 }
						 echo "</tr>";
					}
				}
		catch(Exception $e){
			echo $e->getMessage();
			exit();
		}
    ?>
