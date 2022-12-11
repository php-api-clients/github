<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class UpdateLegacy_
{
    private const OPERATION_ID = 'teams/update-legacy';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}'));
    }
    function validateResponse()
    {
    }
}
