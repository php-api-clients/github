<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateLdapMappingForUser
{
    private const OPERATION_ID = 'enterprise-admin/update-ldap-mapping-for-user';
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
        return new Request('patch', str_replace(['{username}'], [$this->username], '/admin/ldap/users/{username}/mapping?'));
    }

    function validateResponse(): void
    {
    }
}
