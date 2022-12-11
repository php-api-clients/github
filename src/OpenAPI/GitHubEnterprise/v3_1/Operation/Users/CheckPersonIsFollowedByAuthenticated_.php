<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users;

final class CheckPersonIsFollowedByAuthenticated_
{
    private const OPERATION_ID = 'users/check-person-is-followed-by-authenticated';
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $username)
    {
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}'), array($this->username), '/user/following/{username}'));
    }
    function validateResponse()
    {
    }
}
