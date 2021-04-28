<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Teams;

final class DeleteDiscussionCommentInOrg
{
    private const OPERATION_ID = 'teams/delete-discussion-comment-in-org';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /****/
    public int $discussion_number;
    /****/
    public int $comment_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $discussion_number, $comment_number)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{comment_number}'), array($this->org, $this->team_slug, $this->discussion_number, $this->comment_number), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}?'));
    }
    function validateResponse()
    {
    }
}
