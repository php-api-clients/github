<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams;

final class AddMemberLegacy
{
    private const OPERATION_ID = 'teams/add-member-legacy';
    /****/
    public int $team_id;
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id, $username)
    {
        $this->team_id = $team_id;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), '/teams/{team_id}/members/{username}?'));
    }
    function validateResponse()
    {
    }
}