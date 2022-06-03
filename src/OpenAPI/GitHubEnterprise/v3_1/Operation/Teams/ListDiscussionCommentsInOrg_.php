<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

final class ListDiscussionCommentsInOrg_
{
    private const OPERATION_ID = 'teams/list-discussion-comments-in-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The slug of the team name.**/
    public string $team_slug;
    /**The number that identifies the discussion.**/
    public int $discussion_number;
    /**The direction to sort the results by.**/
    public string $direction;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{direction}', '{per_page}', '{page}'), array($this->org, $this->team_slug, $this->discussion_number, $this->direction, $this->per_page, $this->page), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments?direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
