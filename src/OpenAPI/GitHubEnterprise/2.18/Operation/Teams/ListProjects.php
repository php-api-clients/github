<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams;

final class ListProjects
{
    private const OPERATION_ID = 'teams/list-projects';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public int $team_id;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, int $per_page = 30, int $page = 1)
    {
        $this->accept = $accept;
        $this->team_id = $team_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{per_page}', '{page}'), array($this->team_id, $this->per_page, $this->page), '/teams/{team_id}/projects?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
