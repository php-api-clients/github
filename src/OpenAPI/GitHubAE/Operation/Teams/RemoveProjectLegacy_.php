<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class RemoveProjectLegacy_
{
    private const OPERATION_ID = 'teams/remove-project-legacy';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The unique identifier of the project.**/
    private readonly int $project_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $team_id, int $project_id)
    {
        $this->team_id = $team_id;
        $this->project_id = $project_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{team_id}', '{project_id}'), array($this->team_id, $this->project_id), '/teams/{team_id}/projects/{project_id}'));
    }
    function validateResponse()
    {
    }
}
