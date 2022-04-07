<?php
	require("config.php");
	session_start();
	
	if(!(isset($_SESSION['role']))){
  header("Location: index.php");
}
	if(!($_SESSION['role']>=0)){
	header("Location: index.php");
}

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