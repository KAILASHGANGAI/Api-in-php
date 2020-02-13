
<?php
// $get = json_decode(file_get_contents('https://jokeapi.p.rapidapi.com/info/'),true);
//  $string ="https://sv443.net/jokeapi/category/Any?blacklistFlags=political&appid=6186ce438bmshf7c2a652727cdcbp18282djsnf023e494cfbb";
// $data = json_decode(file_get_contents($string),true);

//  $temp = $data['main']['temp'];
//  echo $temp;


$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://jokeapi.p.rapidapi.com/categories');
$request->setRequestMethod('GET');
$request->setQuery(new http\QueryString(array(
  'format' => 'json'
)));

$request->setHeaders(array(
  'x-rapidapi-host' => 'jokeapi.p.rapidapi.com',
  'x-rapidapi-key' => '6186ce438bmshf7c2a652727cdcbp18282djsnf023e494cfbb'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();


?>
<!DOCTYPE html>
<html>
<head>
  <title>api of jock</title>
</head>
<body>

</body>
</html>