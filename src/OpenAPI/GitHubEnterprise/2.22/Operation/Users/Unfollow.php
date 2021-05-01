<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Users;

final class Unfollow
{
    private const OPERATION_ID = 'users/unfollow';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{username}'), array($this->username), '/user/following/{username}?'));
    }
    function validateResponse()
    {
    }
}
