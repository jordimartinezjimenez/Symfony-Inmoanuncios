<?php

namespace App\Repository;

use App\Entity\Anuncio;

class AnuncioRepository
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
            CURLOPT_URL => $this->baseUrl . '/api/anuncios'
        ));

        $respostaJ = curl_exec($curl);
        curl_close($curl);

        $resposta = json_decode($respostaJ);

        $arrayAnuncios = array();
        foreach ($resposta as $row) {
            $anuncio = new Anuncio();

          $anuncio->setId($row->id);
          $anuncio->setReferencia($row->referencia);
          $anuncio->setVendedor_id($row->vendedor_id);
          $anuncio->setImagen($row->imagen);
          $anuncio->setCp($row->cp);
          $anuncio->setPrecio($row->precio);
          $anuncio->setTipo_id($row->tipo_id);
          $anuncio->setTrato($row->trato);
          $anuncio->setHabitaciones($row->habitaciones);
          $anuncio->setArea($row->area);
          $anuncio->setDescripcion($row->descripcion);
          $anuncio->setCreated_at($row->dataN);

    	    array_push($arrayAnuncios, $anuncio);
        }

        return $arrayAnuncios;
    }
}
