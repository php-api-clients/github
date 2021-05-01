<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams;

final class GetDiscussionComment
{
    private const OPERATION_ID = 'teams/get-discussion-comment';
    /****/
    public int $team_id;
    /****/
    public int $discussion_number;
    /****/
    public int $comment_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id, $discussion_number, $comment_number)
    {
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{discussion_number}', '{comment_number}'), array($this->team_id, $this->discussion_number, $this->comment_number), '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}?'));
    }
    function validateResponse()
    {
    }
}