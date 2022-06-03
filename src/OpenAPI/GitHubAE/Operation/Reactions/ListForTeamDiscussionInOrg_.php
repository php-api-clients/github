<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions;

final class ListForTeamDiscussionInOrg_
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-in-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The slug of the team name.**/
    public string $team_slug;
    /**The number that identifies the discussion.**/
    public int $discussion_number;
    /**Returns a single [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion.**/
    public string $content;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $discussion_number, $content, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{content}', '{per_page}', '{page}'), array($this->org, $this->team_slug, $this->discussion_number, $this->content, $this->per_page, $this->page), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
