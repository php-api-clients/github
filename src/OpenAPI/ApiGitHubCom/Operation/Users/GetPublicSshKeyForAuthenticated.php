<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class GetPublicSshKeyForAuthenticated
{
    private const OPERATION_ID = 'users/get-public-ssh-key-for-authenticated';
    /**key_id parameter**/
    public int $key_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($key_id)
    {
        $this->key_id = $key_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{key_id}'), array($this->key_id), '/user/keys/{key_id}?'));
    }
    function validateResponse()
    {
    }
}