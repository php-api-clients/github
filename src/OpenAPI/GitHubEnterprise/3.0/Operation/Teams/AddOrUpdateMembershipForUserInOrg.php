<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Teams;

final class AddOrUpdateMembershipForUserInOrg
{
    private const OPERATION_ID = 'teams/add-or-update-membership-for-user-in-org';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /****/
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->team_slug, $this->username), '/orgs/{org}/teams/{team_slug}/memberships/{username}?'));
    }
    function validateResponse()
    {
    }
}
