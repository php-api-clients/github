<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Teams;

final class ListDiscussionsInOrg
{
    private const OPERATION_ID = 'teams/list-discussions-in-org';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Pinned discussions only filter**/
    public string $pinned;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, $pinned)
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
