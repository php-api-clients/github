<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta;

final class Get
{
    private const OPERATION_ID = 'meta/get';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/meta?'));
    }
    function validateResponse()
    {
    }
}