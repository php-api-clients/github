<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams;

final class ListReposInOrg_
{
    private const OPERATION_ID = 'teams/list-repos-in-org';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{per_page}', '{page}'), array($this->org, $this->team_slug, $this->per_page, $this->page), '/orgs/{org}/teams/{team_slug}/repos?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
