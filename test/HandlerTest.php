<?php

namespace farel\Belajar\PHP\MVC;

use Monolog\Handler\ElasticsearchHandler;
use Monolog\Handler\SlackHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class HandlerTest extends TestCase
{
    public function testHandler()
    {
        $logger = new Logger(HandlerTest::class);

        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));
        
        self::assertNotNull($logger);

        self::assertEquals(2, sizeof($logger->getHandlers()));
    }
}