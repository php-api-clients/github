<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Users;

final class CreatePublicSshKeyForAuthenticated
{
    private const OPERATION_ID = 'users/create-public-ssh-key-for-authenticated';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/user/keys?'));
    }
    function validateResponse()
    {
    }
}
