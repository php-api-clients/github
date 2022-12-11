<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class SyncLdapMappingForTeam_
{
    private const OPERATION_ID = 'enterprise-admin/sync-ldap-mapping-for-team';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $team_id)
    {
        $this->team_id = $team_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{team_id}'), array($this->team_id), '/admin/ldap/teams/{team_id}/sync'));
    }
    function validateResponse()
    {
    }
}
