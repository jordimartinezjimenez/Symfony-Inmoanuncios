<?php

namespace App\Repository;

use App\Entity\Municipio;

class MunicipioRepository
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
            CURLOPT_URL => $this->baseUrl . '/api/municipios'
        ));

        $respostaJ = curl_exec($curl);
        curl_close($curl);

        $resposta = json_decode($respostaJ);

        $arrayMunicipios = array();
        foreach ($resposta as $row) {
            $municipio = new Municipio();

          $municipio->setId($row->id);
          $municipio->setNombre($row->nombre);
          $municipio->setProvincia_id($row->provincia_id);

    	    array_push($arrayMunicipios, $municipio);
        }

        return $arrayMunicipios;
    }
}