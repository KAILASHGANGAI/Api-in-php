<?php
$string = "https://wordsapiv1.p.rapidapi.com/words/hatchback/typeOf";
$data = json_decode(file_get_contents($string) , true);
print_r($data);

// $client = new http\Client;
// $request = new http\Client\Request;

// $request->setRequestUrl('');
// $request->setRequestMethod('GET');
// $request->setHeaders(array(
// 	'x-rapidapi-host' => 'wordsapiv1.p.rapidapi.com',
// 	'x-rapidapi-key' => '6186ce438bmshf7c2a652727cdcbp18282djsnf023e494cfbb'
// ));

// $client->enqueue($request)->send();
// $response = $client->getResponse();

// echo $response->getBody();

$response = Unirest\Request::get("",
  array(
    "X-RapidAPI-Host" => "wordsapiv1.p.rapidapi.com",
    "X-RapidAPI-Key" => "6186ce438bmshf7c2a652727cdcbp18282djsnf023e494cfbb"
  )
);
?>


<!DOCTYPE html>
<html>
<head>
	<title>disc</title>
</head>
<body>
	<!-- <div style="border: 1px solid green; padding:25px;  display: inline-block;">
		<form method="get" action="">
			<input type="text" name="country" placeholder="county code">
			<input type="text" name="year" placeholder="year">
			<input type="submit" name="submit">
		</form>
	</div>
	<div style="text-align: center; justify-content: end;">
		<table style="border: 1px solid black; padding: 10px;">
			<thead style="border: 3px solid black; padding: 3px;">
				<th style="border: 2px solid black; padding: 3px;">Date</th>
				<th style="border: 2px solid black; padding: 3px;">Event</th>
			</thead>
			<tbody style="border: 1px solid black; padding:5px;" >
			<?php
			foreach($holidays as $holiday){
			 	$date = $holiday['name'].'<br>';
				$event = $holiday['date']['iso'];

				?>
						<tr style="border: 1px solid black;">
							<td style="border: 1px solid black; padding: 3px;"> <?php echo "<p>".$event."</p>";?></td>
							<td style="border: 1px solid black; padding: 3px;"> <?php echo "<p>".$date."</p>";?></td>
						</tr>
				<?php

				
			}

			?>
			</tbody>
		</table>
	</div> -->
</body>
</html>