<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetByUsername
{
    private const OPERATION_ID = 'users/get-by-username';
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
        return new Request('get', str_replace(['{username}'], [$this->username], '/users/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
