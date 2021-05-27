<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

final class AddOrUpdateProjectPermissionsLegacy
{
    private const OPERATION_ID = 'teams/add-or-update-project-permissions-legacy';
    /****/
    public int $team_id;
    /****/
    public int $project_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id, $project_id)
    {
        $this->team_id = $team_id;
        $this->project_id = $project_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{team_id}', '{project_id}'), array($this->team_id, $this->project_id), '/teams/{team_id}/projects/{project_id}?'));
    }
    function validateResponse()
    {
    }
}
