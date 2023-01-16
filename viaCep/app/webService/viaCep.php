<?php

namespace App\WebService;

class ViaCEP{

    /**
     * Método responsável por consultar um CEP no ViaCEP
     * @param setring $cep
     * @return  array
     */
    public static function consultarCEP($cep) {

        /* echo"<pre>";
        print_r($cep);
        echo "<pre>"; exit; */

        //Inicia o Curl

        $curl = curl_init();

        //Configurações do Curl
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //Response
        $response = curl_exec($curl);

        //Fecha a conexão aberta
        curl_close($curl);

        //Converte o Jason para Array

        $array = json_decode($response, true);

        //Retornar o conteúdo em Array
        return isset($array['cep']) ? $array : null;


        print_r($response);

    }

    

}



?>