<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Apps;

final class GetAuthenticated
{
    private const OPERATION_ID = 'apps/get-authenticated';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/app?'));
    }
    function validateResponse()
    {
    }
}
