<?php

namespace App\Repository;

use App\Entity\General;

class GeneralRepository
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
            CURLOPT_URL => $this->baseUrl . '/api/generals'
        ));

        $respostaJ = curl_exec($curl);
        curl_close($curl);

        $resposta = json_decode($respostaJ);

        $arrayGenerals = array();
        foreach ($resposta as $row) {
            $general = new General();

          $general->setId($row->id);
          $general->setNombre($row->nombre);
          $general->setApellidos($row->apellidos);
          $general->setEmail($row->email);
          $general->setTelefono($row->telefono);
          $general->setImagen($row->imagen);
          
    	    array_push($arrayGenerals, $general);
        }

        return $arrayGenerals;
    }
}
