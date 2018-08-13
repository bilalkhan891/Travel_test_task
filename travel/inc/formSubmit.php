<?php 



function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}



if (isset($_POST['hotelsdata'])) {
	
	$destination = $_POST['destination'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$rooms = $_POST['rooms'];
	$adults = $_POST['adults'];
	$childs = $_POST['childs'];
	$childsages = $_POST['childsages'];

	$client_ip = get_client_ip();

	$guestCount = $adults." Adult + ". $childs ." Child";
	

	$return = array(
		"_ip" => "203.99.184.165",
		"_data" => array (
			"_token" => "vYup0rwhpalTe5O1zriaihp2SPAGj311eSF3Cyc6",
			"url" => "localhost:80/travel%20test%20task/travel/inc/formSubmit.php",
			"destination" => $destination,
			"hotelcheckin" => "8-8-2018",
			"hotelcheckout" => "8-9-2018",
			"rooms" => $rooms,
			"guests_count" => $guestCount,
			"adult" => $adults,
			"child" => $childs,
			"childage1" => "2"
		)
	);


	echo "<pre>";
	var_dump($return);
	echo '</pre></ br>';


	function curlRequest($return){
		 
		$data = base64_encode(bin2hex(json_encode($return)));


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://southtravels.com/test-hotel-query?_data=".$data);
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec ($ch);
		curl_close ($ch);
		return $output;
	}

	echo '</ br></ br>';



	$data = curlRequest($return);

	var_dump($data);


}