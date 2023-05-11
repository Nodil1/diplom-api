<?php

namespace App\DTO;

class WorkerStatusDTO
{
    public function __construct(
        public int $status,
        public ?int $currentTaskId
    )
    {
    }
}
