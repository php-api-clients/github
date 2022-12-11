<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ListMembersLegacy_
{
    private const OPERATION_ID = 'teams/list-members-legacy';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**Filters members returned by their role in the team.**/
    private readonly string $role;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $team_id, string $role = 'all', int $per_page = 30, int $page = 1)
    {
        $this->team_id = $team_id;
        $this->role = $role;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{role}', '{per_page}', '{page}'), array($this->team_id, $this->role, $this->per_page, $this->page), '/teams/{team_id}/members?role={role}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
