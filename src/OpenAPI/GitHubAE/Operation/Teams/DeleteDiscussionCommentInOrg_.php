<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class DeleteDiscussionCommentInOrg_
{
    private const OPERATION_ID = 'teams/delete-discussion-comment-in-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The slug of the team name.**/
    private readonly string $team_slug;
    /**The number that identifies the discussion.**/
    private readonly int $discussion_number;
    /**The number that identifies the comment.**/
    private readonly int $comment_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $team_slug, int $discussion_number, int $comment_number)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{comment_number}'), array($this->org, $this->team_slug, $this->discussion_number, $this->comment_number), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}'));
    }
    function validateResponse()
    {
    }
}
