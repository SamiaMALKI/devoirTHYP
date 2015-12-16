<?php

include_once 'connect.php';

function select_personne(){
	global $conn;
	
	$sql = "SELECT * FROM personne";
	$result = $conn->query($sql);
	var_dump($result);
	if ($result->num_rows > 0) {
    // output data of each row
	
	    while($row = $result->fetch_assoc()) {
	        echo json_encode($row);
	    }
	} else {
    	echo "0 results";
	}	
}

function select_colis($idpersonne){
	global $conn;
	
	$sql = "SELECT * FROM colis where id_personne =".$idpersonne;
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo json_encode($row);
			
		}
	}	
}
$idpersonne = 2;
var_dump(select_colis($idpersonne));
?>