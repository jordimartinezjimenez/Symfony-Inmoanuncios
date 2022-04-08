<?php

namespace App\Repository;

use App\Entity\Admin;

class AdminRepository
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
            CURLOPT_URL => $this->baseUrl . '/api/admins'
        ));

        $respostaJ = curl_exec($curl);
        curl_close($curl);

        $resposta = json_decode($respostaJ);

        $arrayAdmins = array();
        foreach ($resposta as $row) {
            $admin = new Admin();

          $admin->setId($row->id);
          
    	    array_push($arrayAdmins, $admin);
        }

        return $arrayAdmins;
    }

}
