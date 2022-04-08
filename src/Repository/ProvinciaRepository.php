<?php

namespace App\Repository;

use App\Entity\Provincia;

class ProvinciaRepository
{
    private $baseUrl;

    public function __construct()
    {
      $this->baseUrl = $_ENV['BASE_URL'];
    }

    public function findAll() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->baseUrl . '/api/provincias'
        ));

        $respostaJ = curl_exec($curl);
        curl_close($curl);

        $resposta = json_decode($respostaJ);

        $arrayProvincias = array();
        foreach ($resposta as $row) {
            $provincia = new Provincia();

          $provincia->setId($row->id);
          $provincia->setNombre($row->nombre);

    	    array_push($arrayProvincias, $provincia);
        }

        return $arrayProvincias;
    }
}
