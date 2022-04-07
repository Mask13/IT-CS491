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
	
	echo "<td> The FSO staff provided services promptly and efficiently </td>";
	echo "<td> The FSO staff was curteous and professional </td>";
	echo "<td> The FSO staff was informed or made an effort to get the information needed to assist me </td>";
	echo "<td> The FSO staff was knowledgable and able to answer my questions </td>";
	echo "<td> The FSO staff model self-advocacy skills for me </td>";
	echo "<td> The services that I received helped me to make progress towards my family's goals </td>";
	echo "<td> The quality of life in our home has improved as a result of the services provided by the FSO </td>";
	echo "<td> I would recommend the FSO services to other families </td>";
	
		try{
		
			$stmt = $db->prepare('SELECT * FROM survey');
			$stmt->execute();
			$data = $stmt->fetchAll();
			
			foreach ($data as $row){
				echo "<tr>";
				$stmt = $db->prepare('SELECT fid,firstname,lastname FROM family WHERE fid=:id and uid=:u_id');
				$stmt->execute(['id' => intval($row["f_id"]),'u_id' => intval($_SESSION["ID"])]);
				$data2 = $stmt->fetchAll();
				
				#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
				
				echo "<td>" . $data2[0]["fid"] . "</td>";
				echo "<td>" . $data2[0]["firstname"] . "</td>";
				echo "<td>" . $data2[0]["lastname"] . "</td>";
				
				echo "<td>" . $row["prompt"] . "</td>";
				echo "<td>" . $row["court"] . "</td>";
				echo "<td>" . $row["inform"] . "</td>";
				echo "<td>" . $row["knowledge"] . "</td>";
				echo "<td>" . $row["advocacy"] . "</td>";
				echo "<td>" . $row["goals"] . "</td>";
				echo "<td>" . $row["qol"] . "</td>";
				echo "<td>" . $row["recommend"] . "</td>";
		}

	}
	
	catch(Exception $e){
			echo $e->getMessage();
			exit();
		}
	
?>