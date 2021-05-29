<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DemoteSiteAdministrator
{
    private const OPERATION_ID = 'enterprise-admin/demote-site-administrator';
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
        return new Request('delete', str_replace(['{username}'], [$this->username], '/users/{username}/site_admin?'));
    }

    function validateResponse(): void
    {
    }
}
