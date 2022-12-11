<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class CreateSshSigningKeyForAuthenticatedUser_
{
    private const OPERATION_ID = 'users/create-ssh-signing-key-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/user/ssh_signing_keys'));
    }
    function validateResponse()
    {
    }
}
