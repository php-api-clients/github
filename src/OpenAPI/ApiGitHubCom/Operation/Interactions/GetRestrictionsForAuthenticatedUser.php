<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

final class GetRestrictionsForAuthenticatedUser
{
    private const OPERATION_ID = 'interactions/get-restrictions-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/user/interaction-limits?'));
    }
    function validateResponse()
    {
    }
}
