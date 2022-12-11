<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

final class GetMemberLegacy_
{
    private const OPERATION_ID = 'teams/get-member-legacy';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $team_id, string $username)
    {
        $this->team_id = $team_id;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), '/teams/{team_id}/members/{username}'));
    }
    function validateResponse()
    {
    }
}
