<?php
      include_once('navbar.php');
  ?>

<html lang="en" dir="ltr">
	<head>
		<title>display_Fans</title>
		<button style= "float:right;"type="button" onclick="location.href = 'Logout.php';"
					name="Login"> Logout
		</button>
		<button style= "float:right;"type="button" onclick="location.href = 'home.php';"
					name="Login"> Home
		</button>
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
		#$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE);
		echo "<br>";
		echo "<table border='1'>";
		try{
			$q = $db->prepare("DESCRIBE fans");
			$q->execute();
			$table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
			foreach ($table_fields as $col_name) {
				echo "<td>" .$col_name."</td>";
				}
			$stmt = $db->prepare('SELECT fid FROM family WHERE uid=:u_id');

			$stmt->execute(['u_id' => intval($_SESSION["ID"])]);

			$data = $stmt->fetchAll();
			foreach ($data as $family_id){
				$stmt = $db->prepare('SELECT * FROM fans WHERE f_id=:fam_id');
				$stmt->execute(['fam_id' => $family_id[0]]);
				$data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
				#var_dump($data2);
				
				foreach($data2 as $row){
					echo "<tr>";
					#var_dump($row);
					foreach ($row as $value){
						
						echo "<td>" . $value . "</td>";
				  }
				  
				}
			}
				
		}
			
	   catch(Exception $e){
			echo $e->getMessage();
			exit();
	   }
			
			
?>