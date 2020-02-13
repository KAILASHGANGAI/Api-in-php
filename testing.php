<?php
$country = $year="";
if (isset($_GET['submit'])) {
	$country = $_GET['country'];
	$year = $_GET['year'];
	$string = "https://calendarific.com/api/v2/holidays?&api_key=3eb938a4ba6cec08c9160bb10f113455fee7a49e&country=".$country."&year=".$year;
	$data = json_decode(file_get_contents($string) , true);
	$holidays = $data['response']['holidays'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>disc</title>
</head>
<body>
	<div style="border: 1px solid green; padding:25px;  display: inline-block;">
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
	</div>
</body>
</html>