<?php

namespace App\WebService;

/**
 * 
 * Método responsável por consultar o cep no ViaCEP 
 * @param string $cep
 * @return array
 * 
 */

class ViaCEP{

    public static function consultarCEP($cep){
        // CURL
        $curl = curl_init();

        // config curl
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        // response
        $response = curl_exec($curl);

        // fecha a conexão
        curl_close($curl);

        // converter .json para array
        $array = json_decode($response, true);

        // retorna o conteúdo em array
        return isset($array['cep']) ? $array : null;

    }

}