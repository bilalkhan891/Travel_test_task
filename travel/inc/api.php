<?php 

// $con = mysqli_connect("localhost","root","","apitest");

// $data = $_GET['city'];

function curlRequest($return){       
	
	$data = base64_encode(bin2hex(json_encode($return)));

	$ch = curl_init();       
	curl_setopt($ch, CURLOPT_URL,"https://southtravels.com/test-hotel-query?_data=".$data);       
	curl_setopt($ch, CURLOPT_POST, 0);       
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);       
	$output = curl_exec ($ch);       
	curl_close ($ch);     
	return json_decode($output);
}

$return  = array('_autocomplete' =>  array('type' => 'hotel' ));
$data = curlRequest($return);
// var_dump($data);
// exit;
$mydata = array("location:Andorra la Vella:Andorra", "location:Arinsal:Andorra", "location:Canillo:Andorra", "location:Encamp:Andorra", "location:La Massana:Andorra", "location:Les Escaldes:Andorra", "location:Ordino:Andorra", "location:Pas de la Casa:Andorra", "location:Sant Julia de Loria:Andorra", "location:Ajman:United Arab Emirates", "location:Al Ain:United Arab Emirates", "location:Abu Dhabi:United Arab Emirates", "location:Dubai-Desert:United Arab Emirates", "location:Dubai:United Arab Emirates", "location:Dubai City:United Arab Emirates", "location:Fujairah:United Arab Emirates", "location:Ghantoot:United Arab Emirates", "location:Jebel Ali:United Arab Emirates", "location:Dubai-Jumeirah:United Arab Emirates", "location:Khorfakkan:United Arab Emirates", "location:Ras al Khaimah:United Arab Emirates", "location:Sharjah:United Arab Emirates", "location:Abu Dhabi-Yas Island:United Arab Emirates", "location:Antigua-Deep Bay:Antigua and Barbuda", "location:Dickenson Bay:Antigua and Barbuda", "location:Antigua-Five Islands:Antigua and Barbuda", "location:Hawksbill Bay:Antigua and Barbuda", "location:Antigua-Jolly Beach:Antigua and Barbuda"); 

header('content-type: application/json');
$new_arr = array();
foreach ($data as $k => $dd) {
	$d = explode(":", $dd);
	$new_arr[] = $d[1].", ".$d[2];
	// if ($k==200) {
	// 	break;
	// }
}
// var_dump($new_arr);
// exit;
echo json_encode($new_arr);



 // foreach ($data as $value) { 
 // 	$arr = explode(":",$value);

 // }

 ?>

