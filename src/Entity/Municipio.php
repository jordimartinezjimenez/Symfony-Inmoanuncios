<?php

namespace App\Entity;

use App\Repository\MunicipioRepository;

class Municipio
{
    public $id;

    public $nombre;

    public $provincia_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getProvinciaId(): ?int
    {
        return $this->provincia_id;
    }

    public function setProvinciaId(int $provincia_id): self
    {
        $this->provincia_id = $provincia_id;

        return $this;
    }
}
