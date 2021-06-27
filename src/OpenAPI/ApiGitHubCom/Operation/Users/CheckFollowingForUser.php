<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class CheckFollowingForUser
{
    private const OPERATION_ID = 'users/check-following-for-user';
    /****/
    public string $username;
    /****/
    public string $target_user;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username, $target_user)
    {
        $this->username = $username;
        $this->target_user = $target_user;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{target_user}'), array($this->username, $this->target_user), '/users/{username}/following/{target_user}?'));
    }
    function validateResponse()
    {
    }
}
