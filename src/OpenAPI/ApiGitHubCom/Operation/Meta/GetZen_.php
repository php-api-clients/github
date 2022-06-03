<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta;

final class GetZen_
{
    private const OPERATION_ID = 'meta/get-zen';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/zen?'));
    }
    function validateResponse()
    {
    }
}
