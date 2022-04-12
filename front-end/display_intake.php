<?php
      include_once('navbar.php');
  ?>

<html>
	<header>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
