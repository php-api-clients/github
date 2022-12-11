<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

final class ListDiscussionsInOrg_
{
    private const OPERATION_ID = 'teams/list-discussions-in-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The slug of the team name.**/
    private readonly string $team_slug;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**Pinned discussions only filter**/
    private readonly string $pinned;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, string $pinned)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->pinned = $pinned;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{direction}', '{per_page}', '{page}', '{pinned}'), array($this->org, $this->team_slug, $this->direction, $this->per_page, $this->page, $this->pinned), '/orgs/{org}/teams/{team_slug}/discussions?direction={direction}&per_page={per_page}&page={page}&pinned={pinned}'));
    }
    function validateResponse()
    {
    }
}
