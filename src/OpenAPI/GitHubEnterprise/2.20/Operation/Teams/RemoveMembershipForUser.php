<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Teams;

final class RemoveMembershipForUser
{
    private const OPERATION_ID = 'teams/remove-membership-for-user';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), '/teams/{team_id}/memberships/{username}?'));
    }
    function validateResponse()
    {
    }
}
