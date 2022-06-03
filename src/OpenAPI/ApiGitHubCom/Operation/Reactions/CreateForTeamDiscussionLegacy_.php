<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions;

final class CreateForTeamDiscussionLegacy_
{
    private const OPERATION_ID = 'reactions/create-for-team-discussion-legacy';
    /**The unique identifier of the team.**/
    public int $team_id;
    /**The number that identifies the discussion.**/
    public int $discussion_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id, $discussion_number)
    {
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{team_id}', '{discussion_number}'), array($this->team_id, $this->discussion_number), '/teams/{team_id}/discussions/{discussion_number}/reactions?'));
    }
    function validateResponse()
    {
    }
}
