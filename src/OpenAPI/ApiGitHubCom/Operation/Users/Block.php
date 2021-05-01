<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class Block
{
    private const OPERATION_ID = 'users/block';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{username}'), array($this->username), '/user/blocks/{username}?'));
    }
    function validateResponse()
    {
    }
}