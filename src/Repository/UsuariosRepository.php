<?php

namespace App\Repository;

use App\Entity\Usuarios;

class UsuariosRepository
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
            CURLOPT_URL => $this->baseUrl . '/api/usuarios'
        ));

        $respostaJ = curl_exec($curl);
        curl_close($curl);

        $resposta = json_decode($respostaJ);

        $arrayUsuarios = array();
        foreach ($resposta as $row) {
            $usuario = new Usuario();

          $usuario->setId($row->id);
          $usuario->setNickname($row->nickname);
          $usuario->setPassword($row->password);

    	    array_push($arrayUsuarios, $usuario);
        }

        return $arrayUsuarios;
    }
}
