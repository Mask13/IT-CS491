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

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>

<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<?php
  include_once('navbar.php');
?>

<body>

</body>

</html>

<?php
echo "Assigned Families: \n \n";
$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
$db= new PDO($connection_string, $dbuser, $dbpass);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE);

	echo "<br>";
	echo "<table border='1'>";
	echo "<td> ID </td>";
	echo "<td> First Name </td>";
	echo "<td> Last Name </td>";
	echo "<td> Case Number </td>";
	echo "<td> Assigned Employee </td>";

	try{

		$stmt = $db->prepare('SELECT firstname, lastname, fid, uid FROM family WHERE uid=:id');
		$stmt->execute(['id' => intval($_SESSION["ID"])]);
		$data = $stmt->fetchAll();

		$stmt = $db->prepare('SELECT username FROM users WHERE id=:id');
		$stmt->execute(['id' => intval($_SESSION["ID"])]);
		$data1 = $stmt->fetchAll();
		foreach ($data as $row){
			echo "<tr>";
			$stmt = $db->prepare('SELECT casenumber FROM cases WHERE fid=:id');
			$stmt->execute(['id' => intval($row["fid"])]);
			$data2 = $stmt->fetchAll();

			echo "<td>" . $row["fid"] . "</td>";
			echo "<td>" . $row["firstname"] . "</td>";
			echo "<td>" . $row["lastname"] . "</td>";
			echo "<td>" . $data2[0]["casenumber"] . "</td>";
			echo "<td>" . $data1[0]["username"] . "</td>";
		}

	}

	catch(Exception $e){
			echo $e->getMessage();
			exit();
		}

?>
