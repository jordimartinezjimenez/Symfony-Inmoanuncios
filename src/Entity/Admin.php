<?php

namespace App\Entity;

use App\Repository\AdminRepository;

class Admin
{
    public$id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
