<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Users;

final class DeletePublicSshKeyForAuthenticated
{
    private const OPERATION_ID = 'users/delete-public-ssh-key-for-authenticated';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{key_id}'), array($this->key_id), '/user/keys/{key_id}?'));
    }
    function validateResponse()
    {
    }
}
