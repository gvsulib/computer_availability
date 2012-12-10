<!DOCTYPE html>

<html lang="en">
<head>

	<title>Computer Availability</title>

	<link href="styles.css" rel="stylesheet" />

	<meta http-equiv="refresh" content="30">
</head>

<body>

<h1>Need to print?</h1>

<h2>We have computers on every floor.</h2>

<ol>

<?php

// function to replace file_get_contents()
function new_get_file_contents($url) {
	$ch = curl_init();
	$timeout = 10; // set to zero for no timeout
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$file_contents = curl_exec($ch); 
	curl_close($ch);
	return $file_contents;
}

// Grab JSON dump of available computers and parse

//$json = file_get_contents('http://websupport.server.gvsu.edu/lab/api/room.cfm');
$json = new_get_file_contents('http://websupport.server.gvsu.edu/lab/api/room.cfm');


$results = json_decode($json, true);

var_dump($results);

$building_results = $results['room'];

foreach ($building_results as $key => $values) {

	if($values['buildingAbbreviation'] == "Zumberge") {

		$availableCPU = $values['availablePc'];
		$floor = explode(".", $values['name']);

		if($floor[0] == 1) {
			$readable_floor = "first";
			$floor_suffix = "st";
		} else {
			if($floor[0] == 2) {
				$readable_floor = "second";
				$floor_suffix = "nd";
			} else {
				if($floor[0] == 3) {
					$readable_floor = "third";
					$floor_suffix = "rd";
				} else {
					if($floor[0] == 4) {
						$readable_floor = "fourth";
						$floor_suffix = "th";
					} 
		}	}	}

		echo '<li id="floor' . $floor[0] . '"><span class="floor ' . $readable_floor . '"><abbr title="' . $readable_floor . '">' . $floor[0] . $floor_suffix . '</abbr> Floor:</span> <span class="available">' . $availableCPU . '&nbsp;open</span></li>';
	}
}

?>

</ol>

</body>
</html>