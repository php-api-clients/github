<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams;

final class UpdateLegacy
{
    private const OPERATION_ID = 'teams/update-legacy';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}?'));
    }
    function validateResponse()
    {
    }
}
