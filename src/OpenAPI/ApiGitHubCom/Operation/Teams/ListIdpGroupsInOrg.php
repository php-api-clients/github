<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ListIdpGroupsInOrg
{
    private const OPERATION_ID = 'teams/list-idp-groups-in-org';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/teams/{team_slug}/team-sync/group-mappings?'));
    }
    function validateResponse()
    {
    }
}
