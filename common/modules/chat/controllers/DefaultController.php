<?php

namespace common\modules\chat\controllers;

use yii\console\Controller;
use Ratchet\Server\IoServer;
use common\modules\chat\components\Chat;
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;
use Yii;

/**
 * Default controller for the `chat` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new Chat()
                )
            ),
            Yii::$app->params['chat.port']
        );

        $server->run();
    }
}
