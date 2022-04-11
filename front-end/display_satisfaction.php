<?php
      include_once('navbar.php');
  ?>
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
			
			$stmt = $db->prepare('SELECT fid,firstname,lastname FROM family WHERE uid=:u_id');

			$stmt->execute(['u_id' => intval($_SESSION["ID"])]);

			$data = $stmt->fetchAll();

			

			foreach ($data as $family_id){
				
				$stmt = $db->prepare('SELECT * FROM survey WHERE f_id=:fam_id');
				$stmt->execute(['fam_id' => $family_id[0]]);
				$data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				

				#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
				foreach ($data2 as $row){
					echo "<tr>";
					echo "<td>" . $data[0]["fid"] . "</td>";
					echo "<td>" . $data[0]["firstname"] . "</td>";
					echo "<td>" . $data[0]["lastname"] . "</td>";

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

	}

	catch(Exception $e){
			echo $e->getMessage();
			exit();
		}

?>
