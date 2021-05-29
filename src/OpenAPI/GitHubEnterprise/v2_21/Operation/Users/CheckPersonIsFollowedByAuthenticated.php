<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckPersonIsFollowedByAuthenticated
{
    private const OPERATION_ID = 'users/check-person-is-followed-by-authenticated';
    public string $username;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username)
    {
        $this->username = $username;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}'], [$this->username], '/user/following/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
