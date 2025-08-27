<?php

namespace Tests;

use Yampi\Anymarket\Contracts\EnvironmentInterface;
use Yampi\Anymarket\Services\Environment;

class EnvironmentTest extends TestCase
{
    public function testEnvironmentSandbox(): void
    {
        $this->assertInstanceOf(EnvironmentInterface::class, Environment::sandbox());
    }

    public function testEnvironmentProduction(): void
    {
        $this->assertInstanceOf(EnvironmentInterface::class, Environment::production());
    }
}