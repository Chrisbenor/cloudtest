<?php

require_once __DIR__ . '/vendor/autoload.php';
//Variables de entrada
$a="1995";
$b="Pajas Blancas";
//--------------------------------------
$client = new MongoDB\Client(
    'mongodb+srv://yo:abc13579@cluster0.bosd3.mongodb.net/lluvia?retryWrites=true&w=majority');

$tb=$client->lluvia->lluvia;
$filter= ['$and'=>
            [
                ['AÑO'=>['$eq'=>$a]],
                ['ESTACIÓN'=>['$eq'=>$b]]
            ]
        ];

$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);
/*$registro=array(
"iduser"=>"1458",
"fecha"=>"1/1/2033",
"puntaje"=>"14589"
);*/

//$resultado=$tb->insertOne($registro);
//echo $resultado->getInsertedCount();




?>