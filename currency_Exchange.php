<?php
if (isset($_GET['submit'])) {
	$from =$_GET['currency_from'];
	$to = $_GET['currency_to'];
	$base_price = $_GET['currency'];
	// Fetching JSON
	$req_url = 'https://api.exchangerate-api.com/v4/latest/'.$from;
	$response_json = file_get_contents($req_url);

	// Continuing if we got a result
	if(false !== $response_json) {

	    // Try/catch for json_decode operation
	    try {

		// Decoding
		$response_object = json_decode($response_json);

		
		// $base_price = $_GET['currency']; // Your price in USD
		 $price = round(($base_price * $response_object->rates->$to), 2);

	    }
	    catch(Exception $e) {
	        // Handle JSON parse error...
	    }

	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>dmcbkj</title>
</head>
<style type="text/css">
	form{
		padding-top: 20vh;
		align-items: center;
		text-align: center;
	}
	input{
		padding: 5px;
		margin: 10px;
	}
	p{
		font-size: 20px;
		letter-spacing: 3px;
		color: white;
		background: blue;
	padding:20px;
	display: inline-block;
	}
</style>
<body>
<form method="get">
	<p>
		<?php echo $base_price. $from ."=".  $price. $to; ?> <br>
	</p>
	<div>
		<input type="text" name="currency_from" placeholder="3 letter currency CODE want to convert from" required>
		<input type="text" name="currency_to" placeholder="3 letter currency CODE want to convert into" required>
		<input type="text" name="currency" placeholder="Enter currency" required>
	</div>
	<input type="submit" name="submit" value="convert">

</form>
</body>
</html>