<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Authentication;

use ApiClients\Client\Github\Authentication\Anonymous;
use ApiClients\Client\Github\AuthenticationInterface;
use ApiClients\Tests\Client\Github\AbstractAuthenticationTest;

/**
 * @internal
 */
final class AnonymousTest extends AbstractAuthenticationTest
{
    public function getAuthentication(): AuthenticationInterface
    {
        return new Anonymous();
    }
}
