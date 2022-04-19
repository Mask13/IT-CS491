<?php
require ("config.php");

if(!(isset($_SESSION['role']))){

  header("Location: index.php");

}

if(!($_SESSION['role']>=0)){
  header("Location: index.php");
}
if(($_SESSION['role']==1)){
  header("Location: home.php");
}

?>

<!DOCTYPE html>

<html>
<style media="screen">
  table{
    border-color:#004060;
    border-width: 3px;
    background-color: white;
  }
  th, td{
    padding: 8px;
    border-width: 2px;
  }
  split{
	  width: 300px;
    float: right;
    padding-top: 30px;
    margin-right: 10px;
	  border-radius: 10px;
    border-style: solid;
	  padding-bottom: 10px;
    background-color: white;
  }
  .change{
	  border-radius: 10px;
    padding: 5px;
    padding-top: 9px;
    width: 95%;
  }
  bh{
    font-size: 40px;
    font-family: 'Montserrat', sans-serif;
  }
</style>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home</title>

<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<?php
  include_once('navbar.php');
?>

<body style="background-color: #e0f5f5;">
<br>
<split>
	<div class="col">
	<h3><b>User Information</b></h3><br>
	<h5>Username</h5>

	<?php
		$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
		$db= new PDO($connection_string, $dbuser, $dbpass);
		$stmt = $db->prepare('SELECT username,fso_id FROM users WHERE id=:id');
		$stmt->execute(['id' => intval($_SESSION["ID"])]);
		$data1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo $data1[0]["username"];
	?>
	<br><br>
	<h5>FSO</h5>
	<?php
		$stmt = $db->prepare('SELECT name FROM FSO WHERE fso_id=:id');
		$stmt->execute(['id' => $data1[0]["fso_id"]]);
		$data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo $data2[0]["name"];
	?>
	<br><br>
	<button class="change" onclick="window.location.href='http://familysupportorganizationo.sg-host.com/changepassword.php';">
      <h5>Change Password</h5>
    </button>
	</div>
</split>
<split>
  <div class="col">
    <h3><b>Supervisor Tools</b></h3><br>
    <button class="change" onclick="window.location.href='http://familysupportorganizationo.sg-host.com/register.php';">
      <h5>Add New User</h5>
    </button>
    <button class="change" onclick="window.location.href='http://familysupportorganizationo.sg-host.com/FSOFam-Display.php';">
      <h5>View Families under Employees</h5>
    </button>
  </div>
</split>
<div class="col">

    <bh>Assigned Families</bh>
    <?php
    	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    	ini_set('display_errors', 1);
    
    	echo "<br>";
    	echo "<table border='1'>";
    	echo "<td> ID </td>";
    	echo "<td> First Name </td>";
    	echo "<td> Last Name </td>";
    	echo "<td> Case Number </td>";
    	#echo "<td> Assigned Employee </td>";
    
    	try{
    
    		$stmt = $db->prepare('SELECT fid,person_id FROM family WHERE uid=:u_id');
    
    		$stmt->execute(['u_id' => intval($_SESSION["ID"])]);
    
    		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    
    		#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
    
    		foreach ($data as $family_id){
    
    			$stmt = $db->prepare('SELECT firstname,lastname FROM personal_info WHERE person_id=:pers_id');
    			$stmt->execute(['pers_id' => $family_id['person_id']]);
    			$data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    			#var_dump($data2);
    			#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
    			#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
    			foreach ($data2 as $row){
    				echo "<tr>";
    				$stmt = $db->prepare('SELECT casenumber FROM cases WHERE fid=:id');
    				$stmt->execute(['id' => intval($family_id["fid"])]);
    				$data3 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    				#var_dump($data3);
    				#echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
    
    				echo "<td>" . $family_id['fid'] . "</td>";
    				echo "<td>" . $row["firstname"] . "</td>";
    				echo "<td>" . $row["lastname"] . "</td>";
    				echo "<td>" . $data3[0]["casenumber"] . "</td>";
    				#echo "<td>" . $data1[0]["username"] . "</td>";
    				}
    		}
    
    	}
    
    	catch(Exception $e){
    			echo $e->getMessage();
    			exit();
    		}
    
    ?>

</div>
</body>

</html>
