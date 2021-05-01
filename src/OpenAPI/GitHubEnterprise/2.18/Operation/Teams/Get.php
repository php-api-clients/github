<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams;

final class Get
{
    private const OPERATION_ID = 'teams/get';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}?'));
    }
    function validateResponse()
    {
    }
}
