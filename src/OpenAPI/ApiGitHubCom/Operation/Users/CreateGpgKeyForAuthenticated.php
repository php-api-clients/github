<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class CreateGpgKeyForAuthenticated
{
    private const OPERATION_ID = 'users/create-gpg-key-for-authenticated';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/user/gpg_keys?'));
    }
    function validateResponse()
    {
    }
}
