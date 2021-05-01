<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Teams;

final class GetMembershipForUserLegacy
{
    private const OPERATION_ID = 'teams/get-membership-for-user-legacy';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), '/teams/{team_id}/memberships/{username}?'));
    }
    function validateResponse()
    {
    }
}
