<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class GetPublicKeyForAuthenticatedUser
{
    private const OPERATION_ID = 'codespaces/get-public-key-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/user/codespaces/secrets/public-key?'));
    }
    function validateResponse()
    {
    }
}
