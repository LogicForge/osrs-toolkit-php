<?php

$callArray = array (
	'func' => 'lookupGetBalance',

    'data' => array (),
);

require __DIR__ . '/../vendor/autoload.php';
use OpenSRS\Request;


try {
    $request = new Request();
    $osrsHandler = $request->process('array', $callArray);

    var_dump($osrsHandler->resultRaw);
}
catch(\OpenSRS\Exception $e) {
    var_dump($e->getMessage());
}