<?php
use App\Http\Controllers\WebSocketController;

$webSocketController = new WebSocketController;

$this->on('connection', [$webSocketController, 'onOpen']);
$this->on('message', [$webSocketController, 'onMessage']);
$this->on('close', [$webSocketController, 'onClose']);
$this->on('error', [$webSocketController, 'onError']);
