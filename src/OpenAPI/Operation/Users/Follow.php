<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Users;

final class Follow
{
    private const OPERATION_ID = 'users/follow';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{username}'), array($this->username), '/user/following/{username}?'));
    }
    function validateResponse()
    {
    }
}
