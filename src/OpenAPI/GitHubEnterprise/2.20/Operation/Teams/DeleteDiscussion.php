<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Teams;

final class DeleteDiscussion
{
    private const OPERATION_ID = 'teams/delete-discussion';
    /****/
    public int $team_id;
    /****/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{team_id}', '{discussion_number}'), array($this->team_id, $this->discussion_number), '/teams/{team_id}/discussions/{discussion_number}?'));
    }
    function validateResponse()
    {
    }
}
