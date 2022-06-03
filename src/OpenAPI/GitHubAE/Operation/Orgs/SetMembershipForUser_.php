<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

final class SetMembershipForUser_
{
    private const OPERATION_ID = 'orgs/set-membership-for-user';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The handle for the GitHub user account.**/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $username)
    {
        $this->org = $org;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/memberships/{username}?'));
    }
    function validateResponse()
    {
    }
}
