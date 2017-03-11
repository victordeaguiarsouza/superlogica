<?php

try{

    $api = require_once('api.php');

    $clientes = new \Superlogica\Clientes($api);

    $response = $clientes->get(['ID_SACADO_SAC' => 2]);

    echo '<pre>';
    print_r($response);
}
catch(\Exception $e){
    
    echo $e->getMessage();
}