<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase as Test;

class TestCase extends Test
{
    protected function mockHttpClient($responseBodyFile = null, $httpCode = 200): Client
    {
        $mock = new MockHandler();

        if ($responseBodyFile) {
            $mock->append(new Response($httpCode, [], file_get_contents(realpath($responseBodyFile))));
        }

        return new Client([
            'handler' => HandlerStack::create($mock),
        ]);
    }
}