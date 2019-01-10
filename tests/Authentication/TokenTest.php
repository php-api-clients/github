<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Authentication;

use ApiClients\Client\Github\Authentication\Token;
use ApiClients\Client\Github\AuthenticationInterface;
use ApiClients\Tests\Client\Github\AbstractAuthenticationTest;

/**
 * @internal
 */
final class TokenTest extends AbstractAuthenticationTest
{
    public function getAuthentication(): AuthenticationInterface
    {
        return new Token('foo.bar');
    }
}
