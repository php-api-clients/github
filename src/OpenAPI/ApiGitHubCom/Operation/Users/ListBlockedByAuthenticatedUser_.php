<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class ListBlockedByAuthenticatedUser_
{
    private const OPERATION_ID = 'users/list-blocked-by-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/user/blocks'));
    }
    function validateResponse()
    {
    }
}
