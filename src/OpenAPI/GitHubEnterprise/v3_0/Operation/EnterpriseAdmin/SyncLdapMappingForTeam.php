<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SyncLdapMappingForTeam
{
    private const OPERATION_ID = 'enterprise-admin/sync-ldap-mapping-for-team';
    public int $team_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id)
    {
        $this->team_id = $team_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{team_id}'], [$this->team_id], '/admin/ldap/teams/{team_id}/sync?'));
    }

    function validateResponse(): void
    {
    }
}
