<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Teams;

final class ListMembersLegacy
{
    private const OPERATION_ID = 'teams/list-members-legacy';
    /****/
    public int $team_id;
    /**Filters members returned by their role in the team. Can be one of:  
    \* `member` - normal members of the team.  
    \* `maintainer` - team maintainers.  
    \* `all` - all members of the team.**/
    public string $role;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id, string $role = 'all', int $per_page = 30, int $page = 1)
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
