<?php

namespace App\DTO;

use Ratchet\ConnectionInterface;

class SocketClient
{
    public function __construct(
        public UserDTO $user,
        public ConnectionInterface $connection
    )
    {
    }
}
