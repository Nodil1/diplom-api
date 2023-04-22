<?php

namespace App\DTO;

class CarDTO
{
    public function __construct(
        public string $carBrand,
        public string $carModel,
        public string $carNumber,
        public ?int $id = null
    )
    {

    }
}
