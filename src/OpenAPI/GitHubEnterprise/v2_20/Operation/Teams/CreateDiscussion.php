<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams;

final class CreateDiscussion
{
    private const OPERATION_ID = 'teams/create-discussion';
    /****/
    public int $team_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id)
    {
        $this->team_id = $team_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}/discussions?'));
    }
    function validateResponse()
    {
    }
}
