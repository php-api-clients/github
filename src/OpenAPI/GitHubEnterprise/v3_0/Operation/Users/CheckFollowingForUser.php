<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckFollowingForUser
{
    private const OPERATION_ID = 'users/check-following-for-user';
    public string $username;
    public string $target_user;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username, $target_user)
    {
        $this->username    = $username;
        $this->target_user = $target_user;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}', '{target_user}'], [$this->username, $this->target_user], '/users/{username}/following/{target_user}?'));
    }

    function validateResponse(): void
    {
    }
}
