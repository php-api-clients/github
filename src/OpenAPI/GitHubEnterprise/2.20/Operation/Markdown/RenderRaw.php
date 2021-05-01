<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Markdown;

final class RenderRaw
{
    private const OPERATION_ID = 'markdown/render-raw';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/markdown/raw?'));
    }
    function validateResponse()
    {
    }
}
