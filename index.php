<?php 

require 'vendor/autoload.php';

$client = Elasticsearch\ClientBuilder::create()->build();

$params = array();

// $params['body']  = array(
// 	'name' => 'Misty',
// 	'age' => 13,
// 	'badges' => 0,
// 	'pokemon' => [
// 		'psyduck' => [
// 			'type' => 'water',
// 			'moves' => [
// 				'Water Gun' => [
// 					'pp' => 25,
// 					'power' => 40
// 				]
// 			] 
// 		]
// 	] 
// );

 $params['index'] = 'pokemon';
 $params['type']  = 'pokemon_trainer';

//$params['body']['query']['bool']['must'][]['match']['pokemon.psyduck.type'] = 'water';

// query with 'age' = 15 or = 13
//$params['body']['query']['bool']['must']['terms']['age'] = array(13, 15);

//query with 'age' > 13 and < 20
// $params['body']['query']['bool']['filter']['range']['age']['gte'] = 13;
// $params['body']['query']['bool']['filter']['range']['age']['lte'] = 20;

// //
// $params['body']['query']['bool']['filter']['and'][]['term']['age'] = 10;
// $params['body']['query']['bool']['filter']['and'][]['term']['badges'] = 8;


$result = $client->search($params);
var_dump('<pre>',$result);die;

?>