<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Markdown;

final class Render_
{
    private const OPERATION_ID = 'markdown/render';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/markdown?'));
    }
    function validateResponse()
    {
    }
}
