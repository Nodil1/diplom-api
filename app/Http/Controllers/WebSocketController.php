<?php

namespace App\Http\Controllers;

use App\DTO\SocketClient;
use App\DTO\UserDTO;
use Illuminate\Support\Collection;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Laravel\Sanctum\PersonalAccessToken;

class WebSocketController implements MessageComponentInterface
{
    /**
     * @var Collection<SocketClient>
     */
    protected Collection $clients;

    public function __construct()
    {
        $this->clients = new Collection();
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $params = $conn->WebSocket->request->getQuery()->toArray();
        $token = $params['token'];

        $user = PersonalAccessToken::findToken($token)->tokenable;
        $this->clients->add(new SocketClient(
            UserDTO::fromModel($user),  $conn
        ));
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->reject(function(SocketClient $element) use ($conn) {
            return $element->connection === $conn;
        });
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        $conn->close();
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        foreach ($this->clients as $client) {
            if ($from !== $client) {
                $client->send($msg);
            }
        }
    }

    public function sendToAll($msg)
    {
        foreach ($this->clients as $client) {
            $client->send($msg);
        }
    }
}
