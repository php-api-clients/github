<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github;

use ApiClients\Client\Github\AuthenticationInterface;
use ApiClients\Tools\TestUtilities\TestCase;

abstract class AbstractAuthenticationTest extends TestCase
{
    abstract public function getAuthentication(): AuthenticationInterface;

    public function testOptionsReturnType()
    {
        self::assertInternalType('array', $this->getAuthentication()->getOptions());
    }
}
