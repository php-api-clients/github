<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Orgs;

final class SetPublicMembershipForAuthenticatedUser
{
    private const OPERATION_ID = 'orgs/set-public-membership-for-authenticated-user';
    /****/
    public string $org;
    /****/
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/public_members/{username}?'));
    }
    function validateResponse()
    {
    }
}
