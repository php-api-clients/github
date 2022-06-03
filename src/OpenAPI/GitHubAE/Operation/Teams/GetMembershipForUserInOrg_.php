<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class GetMembershipForUserInOrg_
{
    private const OPERATION_ID = 'teams/get-membership-for-user-in-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The slug of the team name.**/
    public string $team_slug;
    /**The handle for the GitHub user account.**/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $username)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->team_slug, $this->username), '/orgs/{org}/teams/{team_slug}/memberships/{username}?'));
    }
    function validateResponse()
    {
    }
}
