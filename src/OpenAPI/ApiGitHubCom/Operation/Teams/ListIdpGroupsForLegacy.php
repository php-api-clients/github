<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ListIdpGroupsForLegacy
{
    private const OPERATION_ID = 'teams/list-idp-groups-for-legacy';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}/team-sync/group-mappings?'));
    }
    function validateResponse()
    {
    }
}
