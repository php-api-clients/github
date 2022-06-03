<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class CreateOrUpdateIdpGroupConnectionsLegacy_
{
    private const OPERATION_ID = 'teams/create-or-update-idp-group-connections-legacy';
    /**The unique identifier of the team.**/
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}/team-sync/group-mappings?'));
    }
    function validateResponse()
    {
    }
}
