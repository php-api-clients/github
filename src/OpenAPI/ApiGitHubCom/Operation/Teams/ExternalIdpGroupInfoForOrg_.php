<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ExternalIdpGroupInfoForOrg_
{
    private const OPERATION_ID = 'teams/external-idp-group-info-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The unique identifier of the group.**/
    public int $group_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $group_id)
    {
        $this->org = $org;
        $this->group_id = $group_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{group_id}'), array($this->org, $this->group_id), '/orgs/{org}/external-group/{group_id}'));
    }
    function validateResponse()
    {
    }
}
