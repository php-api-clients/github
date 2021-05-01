<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

final class CheckMembershipForUser
{
    private const OPERATION_ID = 'orgs/check-membership-for-user';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/members/{username}?'));
    }
    function validateResponse()
    {
    }
}
