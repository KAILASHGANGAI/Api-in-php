<?php
$data ="";
if (isset($_GET['country'])) {
		$country =$_GET['country'];
		$category = $_GET['category'];
			$string="https://newsapi.org/v2/top-headlines?country=".$country."&category=".$category."&apiKey=decd09ddf0fa465893a78970e32439cc";
		$data = json_decode(file_get_contents($string) , true);
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>news</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<style type="text/css">
	p{
		font-size: 20px;

	}
	form{
		padding-left: 50vh;
		padding-right: 50vh;
	}
	
</style>
<body>
<div class="text-center container justify-content-center bg-secondary p-5">
	<h5>country News</h5>
	<span>Search news by country short form such as Argentina ar,Australia au,Austria at,Belgium be,Brazil br,Bulgaria bg,Canada ca,China cn,Colombia co,uba cu,Czech Republic cz,Egypt eg,France fr,Germany de,Greece gr,Hong Kong hk,Hungary hu,India in,Indonesia id,Ireland ie,Israel il,Italy it, Japan jp,Latvia lv,Lithuania lt,Malaysia my,Mexico mx,Morocco ma,Netherlands nl,New Zealand nz,Nigeria ng,Norway no,Philippines ph,Poland pl,Portugal pt,Romania ro,Russia ru,Saudi Arabia rs, Singapore sg, Slovakia sk,Slovenia si, South Africa za,South Korea kr,Sweden se, Switzerland ch,Taiwan tw, Thailand th,Turkey tr,Ukraine ua,United Kingdom gb,United States
us,Venuzuela ve
</span>
<p>Sub-categories like business, entertainment ,health ,science ,sports ,technology</p>
	<form method="GET" action="" class="form text-center d-flex">
		<input type="text" name="country" placeholder="Enter country name code" class="form-control">
		<input type="text" name="category" placeholder="Enter category" class="form-control mx-2">
		<input type="submit" name="submit" value="search" class="btn btn-danger ">
	</form>
</div>

<?php

if ($data) {
	foreach($data['articles'] as $article){
		// foreach ($article['source'] as $a) {
		// 	print_r($a);
		// }
		$author=$article['author'];
		$title =$article['title'];
		$description = $article['description'];
		$urlToImage = $article['urlToImage'];
		$publishedAt = $article['publishedAt'];
		$content = $article['content'];

		?>

		<div class="container">
			<h1><?php echo $title; ?></h1>
			<span>Auther: <?php echo $author; ?></span>,
			<span class="float-right"><?php echo $publishedAt; ?></span>
		</div>
		<div class="container">
			<img src="<?php echo $urlToImage; ?>" class="img-fluid" style="width: 100%; height: 400px;">
		</div>
	<div class="container my-3">
		<p class="px-5">
			<?php echo $description; ?>
		</p>
		<p class="px-5"> 
			<?php echo $content; ?>
		</p>
	</div><hr>
		<?php

	}
}



?>
</body>
</html>