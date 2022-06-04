<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

final class RemoveRestrictionsForAuthenticatedUser_
{
    private const OPERATION_ID = 'interactions/remove-restrictions-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array(), array(), '/user/interaction-limits'));
    }
    function validateResponse()
    {
    }
}
