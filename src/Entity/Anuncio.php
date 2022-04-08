<?php

namespace App\Entity;

use App\Repository\AnuncioRepository;

class Anuncio
{
    public $id;

    public $referencia;

    public $vendedor_id;

    public $imagen;

    public $municipio_id;

    public $cp;

    public $precio;

    public $tipo_id;

    public $trato;

    public $habitaciones;

    public $area;

    public $descripcion;

    public $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->referencia;
    }

    public function setReferencia(string $referencia): self
    {
        $this->referencia = $referencia;

        return $this;
    }

    public function getVendedorId(): ?int
    {
        return $this->vendedor_id;
    }

    public function setVendedorId(int $vendedor_id): self
    {
        $this->vendedor_id = $vendedor_id;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getMunicipioId(): ?int
    {
        return $this->municipio_id;
    }

    public function setMunicipioId(int $municipio_id): self
    {
        $this->municipio_id = $municipio_id;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getTipoId(): ?int
    {
        return $this->tipo_id;
    }

    public function setTipoId(int $tipo_id): self
    {
        $this->tipo_id = $tipo_id;

        return $this;
    }

    public function getTrato(): ?string
    {
        return $this->trato;
    }

    public function setTrato(string $trato): self
    {
        $this->trato = $trato;

        return $this;
    }

    public function getHabitaciones(): ?int
    {
        return $this->habitaciones;
    }

    public function setHabitaciones(?int $habitaciones): self
    {
        $this->habitaciones = $habitaciones;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(?int $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
