<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users;

final class GetAuthenticated
{
    private const OPERATION_ID = 'users/get-authenticated';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/user?'));
    }
    function validateResponse()
    {
    }
}
