<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class RemoveMembershipForUser
{
    private const OPERATION_ID = 'orgs/remove-membership-for-user';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/memberships/{username}?'));
    }
    function validateResponse()
    {
    }
}
