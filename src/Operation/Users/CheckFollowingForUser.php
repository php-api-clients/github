<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Users;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckFollowingForUser
{
    public const OPERATION_ID    = 'users/check-following-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/following/{target_user}';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/following/{target_user}';
    /**The handle for the GitHub user account.**/
    private string $username;
    private string $targetUser;

    public function __construct(string $username, string $targetUser)
    {
        $this->username   = $username;
        $this->targetUser = $targetUser;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{target_user}'], [$this->username, $this->targetUser], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
