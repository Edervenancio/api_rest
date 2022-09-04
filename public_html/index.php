<?php

    header('Content-Type: application/json');

    require_once '../vendor/autoload.php';

    // /api/city/
    if($_GET['url']){
    $url = explode('/', $_GET['url']);
   
  
    if($url[0] === 'api'){
        array_shift($url);

        $service ='App\Services\\' . ucfirst($url[0]) . 'Service';

        $method = strtolower($_SERVER['REQUEST_METHOD']);
        
        array_shift($url);
       
       
        try {   
           $response = call_user_func_array(array(new App\Services\CityService, $method), $url);
           echo  json_encode(array('status' => 'SUCESSO', 'data'=>$response), JSON_UNESCAPED_UNICODE);
           exit;
        } catch(\Exception $e){
            echo  json_encode(array('status' => 'ERRO', 'mensagem'=>'O CEP informado não foi encontrado'), JSON_UNESCAPED_UNICODE);
            exit;
        }
    }
    } 