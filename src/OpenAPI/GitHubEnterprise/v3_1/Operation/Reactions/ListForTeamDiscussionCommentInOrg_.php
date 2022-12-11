<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

final class ListForTeamDiscussionCommentInOrg_
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-comment-in-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The slug of the team name.**/
    private readonly string $team_slug;
    /**The number that identifies the discussion.**/
    private readonly int $discussion_number;
    /**The number that identifies the comment.**/
    private readonly int $comment_number;
    /**Returns a single [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion comment.**/
    private readonly string $content;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $team_slug, int $discussion_number, int $comment_number, string $content, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{comment_number}', '{content}', '{per_page}', '{page}'), array($this->org, $this->team_slug, $this->discussion_number, $this->comment_number, $this->content, $this->per_page, $this->page), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
