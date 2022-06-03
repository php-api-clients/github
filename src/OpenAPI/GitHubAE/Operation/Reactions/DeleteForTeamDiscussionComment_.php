<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions;

final class DeleteForTeamDiscussionComment_
{
    private const OPERATION_ID = 'reactions/delete-for-team-discussion-comment';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The slug of the team name.**/
    public string $team_slug;
    /**The number that identifies the discussion.**/
    public int $discussion_number;
    /**The number that identifies the comment.**/
    public int $comment_number;
    /**The unique identifier of the reaction.**/
    public int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $discussion_number, $comment_number, $reaction_id)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{comment_number}', '{reaction_id}'), array($this->org, $this->team_slug, $this->discussion_number, $this->comment_number, $this->reaction_id), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}?'));
    }
    function validateResponse()
    {
    }
}
