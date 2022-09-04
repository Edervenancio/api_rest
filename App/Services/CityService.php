<?php
    namespace App\Services;

    use App\Models\City;

    class CityService 
     {

        public function get($cep = null)
        {
            
            if($cep){
               return City::getCity($cep);
            } else {
              echo  json_encode(array('status' => 'ERRO', 'mensagem'=>'O CEP informado não foi encontrado, ou introduzido'), JSON_UNESCAPED_UNICODE);
              exit();
            }

        }

        public function post()
        {
            $data = $_POST;
            return City::insert($data);
        }

        
         
       


    }