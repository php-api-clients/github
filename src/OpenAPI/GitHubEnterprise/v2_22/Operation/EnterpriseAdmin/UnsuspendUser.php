<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UnsuspendUser
{
    private const OPERATION_ID = 'enterprise-admin/unsuspend-user';
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
        return new Request('delete', str_replace(['{username}'], [$this->username], '/users/{username}/suspended?'));
    }

    function validateResponse(): void
    {
    }
}
