<?php
include("connect.php");
$sql = $conn->query("SELECT * FROM result");
$result = array();
 
while($row = mysqli_fetch_array($sql)){
	array_push($result, array('nama' => $row[0], 'tgllhr' => $row[1],  'waktu' => $row[2]));
}
echo json_encode(array("result" => $result));


?>