<?php
      include_once('navbar.php');
  ?>

<html lang="en" dir="ltr">
	<head>
		<title>display_intake</title>
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
	   
	   echo "<br>";
	   echo "<table border='1'>";
       try{

			$q = $db->prepare("DESCRIBE family");
			$q->execute();
			$table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
		    #$stmt = $db->query('SHOW COLUMNS FROM family')->fetchall(PDO::FETCH_ASSOC);
			#$sql = "SHOW COLUMNS FROM family";
			#var_dump($table_fields);
			foreach ($table_fields as $col_name) {
				echo "<td>" .$col_name."</td>";
				}

				echo "<td> Case Number </td>";
				echo "<td> Program start date </td>";
				echo "<td> Care manager </td>";
				echo "<td> DYFScontact </td>";

			 $stmt = $db->prepare('SELECT * FROM family WHERE uid=:u_id');

			$stmt->execute(['u_id' => intval($_SESSION["ID"])]);

			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			 #$stmt->execute();
			 #$sql = "SELECT * from family";
			 foreach ($data as $row) {
				#var_dump($row['fid']);
				 echo "<tr>";
				 #echo "<td>$row[1]</td>";

				  foreach ($row as $value){
				#	  var_dump($value);
						 echo "<td>" . $value . "</td>";
				  }

				  $stmt1 = $db->prepare('SELECT casenumber,programstartdate,caremanager,dyfscontact FROM cases where fid = ?');
				  $stmt1->execute([$row['fid']]);
				  $data = $stmt1->fetchAll(PDO::FETCH_ASSOC);
				  #var_dump($data);
				  foreach ($data as $row1){
					  foreach ($row1 as $value1)
					  #var_dump($value1);
						 echo "<td>" . $value1 . "</td>";
				  }

				  echo "</tr>";
			   }
		    }
		catch(Exception $e){
			echo $e->getMessage();
			exit();
		}
    ?>
