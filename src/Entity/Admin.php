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
}
