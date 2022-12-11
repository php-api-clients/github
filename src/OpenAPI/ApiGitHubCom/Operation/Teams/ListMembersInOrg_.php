<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ListMembersInOrg_
{
    private const OPERATION_ID = 'teams/list-members-in-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The slug of the team name.**/
    private readonly string $team_slug;
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
    function __construct(string $org, string $team_slug, string $role = 'all', int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->role = $role;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{role}', '{per_page}', '{page}'), array($this->org, $this->team_slug, $this->role, $this->per_page, $this->page), '/orgs/{org}/teams/{team_slug}/members?role={role}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
