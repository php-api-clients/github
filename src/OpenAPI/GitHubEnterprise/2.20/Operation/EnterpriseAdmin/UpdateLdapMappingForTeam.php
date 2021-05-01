<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin;

final class UpdateLdapMappingForTeam
{
    private const OPERATION_ID = 'enterprise-admin/update-ldap-mapping-for-team';
    /****/
    public int $team_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id)
    {
        $this->team_id = $team_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{team_id}'), array($this->team_id), '/admin/ldap/teams/{team_id}/mapping?'));
    }
    function validateResponse()
    {
    }
}
