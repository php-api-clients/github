<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

final class SetRestrictionsForAuthenticatedUser_
{
    private const OPERATION_ID = 'interactions/set-restrictions-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array(), array(), '/user/interaction-limits?'));
    }
    function validateResponse()
    {
    }
}
