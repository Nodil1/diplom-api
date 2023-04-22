<?php

namespace Tests\Unit;

use App\Const\UserType;
use App\Const\WorkerType;
use App\DTO\UserDTO;
use App\DTO\WorkerDTO;
use App\Services\WorkerService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WorkerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCreate(): void
    {
        WorkerService::createWorker(
            new UserDTO(
                'Иванов Иван Иванович',
                "Ivan",
                UserType::WORKER,
                password: '123456',
            ),
            new WorkerDTO(
                '+79012345678',
                WorkerType::COMPILER
            )
        );
        $this->assertTrue(WorkerService::getAllWorkers()->count() === 1);
    }

    public function testGet(): void
    {
        $this->assertTrue(true);
    }
}
