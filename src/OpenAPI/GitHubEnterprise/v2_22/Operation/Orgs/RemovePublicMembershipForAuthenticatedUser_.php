<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs;

final class RemovePublicMembershipForAuthenticatedUser_
{
    private const OPERATION_ID = 'orgs/remove-public-membership-for-authenticated-user';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/public_members/{username}'));
    }
    function validateResponse()
    {
    }
}
