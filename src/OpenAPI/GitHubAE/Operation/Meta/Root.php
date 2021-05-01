<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta;

final class Root
{
    private const OPERATION_ID = 'meta/root';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/?'));
    }
    function validateResponse()
    {
    }
}
