<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class GetByUsername_
{
    private const OPERATION_ID = 'users/get-by-username';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}'), array($this->username), '/users/{username}'));
    }
    function validateResponse()
    {
    }
}
