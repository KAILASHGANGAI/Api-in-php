<?php
if (isset($_GET['submit'])) {
	$category= $_GET['category'];
	$type = $_GET['type'];
	$string="https://sv443.net/jokeapi/category/".$category."?blacklistFlags=".$type;
	$data = json_decode(file_get_contents($string) , true);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>jocks</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
	<div class="bg-dark text-white" style="padding: 1rem;">
			<div class="container m-5">
				<form method="get" action="" class="float-right">
					<div class="d-flex">
						<div class="form-group">
						  <label for="sel1">category:</label>
						  <select class="form-control" id="sel1" name="category">
						    <option  value="Programming">Programming</option>
						    <option value="Miscellaneous">Miscellaneous</option>
						    <option  value="Dark">Dark</option>
						    <option  value="Any">Any</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="sel1">Select type:</label>
						  <select class="form-control" id="sel1" name="type">
						    <option  value="nsfw">nsfw</option>
						    <option  value="religious">religious</option>
						    <option value="political">political</option>
						  </select>
						</div>
					</div>
					<input type="submit" name="submit" value="search" class="btn btn-danger ">
				</form>

			</div>

		<div class="container m-5">
			<h1>joke</h1>

			<?php

			if (isset($data['joke'])) {
				echo $data['category']."<br>";
				echo $joke=$data['joke'];
			}elseif(isset($data['setup'])){

				echo $data['category']."<br>";

				echo $joke=$data['setup'];
				echo $joke_d=$data['delivery'];
			}

			?>
		</div>
	</div>
</body>
</html>