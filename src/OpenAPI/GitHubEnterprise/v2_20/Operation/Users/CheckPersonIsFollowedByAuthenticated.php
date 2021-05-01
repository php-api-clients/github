<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users;

final class CheckPersonIsFollowedByAuthenticated
{
    private const OPERATION_ID = 'users/check-person-is-followed-by-authenticated';
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username)
    {
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}'), array($this->username), '/user/following/{username}?'));
    }
    function validateResponse()
    {
    }
}
