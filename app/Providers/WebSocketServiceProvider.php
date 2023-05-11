<?php

namespace App\Providers;

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use React\EventLoop\Factory;

class WebSocketServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('webSocketServer', function($app) {
            $loop = Factory::create();

            $webSocket = new WsServer(require base_path('routes/websocket.php'));
            $webSocket->disableVersion(0);

            $socket = new \React\Socket\Server('0.0.0.0:8080', $loop);

            $server = new IoServer(
                new HttpServer($webSocket), $socket, $loop
            );

            return $server;
        });
    }

    public function boot()
    {
        //
    }
}
