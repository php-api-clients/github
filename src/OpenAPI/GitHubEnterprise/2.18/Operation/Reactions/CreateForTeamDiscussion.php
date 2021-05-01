<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Reactions;

final class CreateForTeamDiscussion
{
    private const OPERATION_ID = 'reactions/create-for-team-discussion';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public int $team_id;
    /****/
    public int $discussion_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.echo-preview+json,application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number)
    {
        $this->accept = $accept;
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
