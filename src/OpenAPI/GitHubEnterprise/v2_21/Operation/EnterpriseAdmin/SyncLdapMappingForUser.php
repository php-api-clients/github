<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SyncLdapMappingForUser
{
    private const OPERATION_ID = 'enterprise-admin/sync-ldap-mapping-for-user';
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
        return new Request('post', str_replace(['{username}'], [$this->username], '/admin/ldap/users/{username}/sync?'));
    }

    function validateResponse(): void
    {
    }
}
