<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore;

final class GetAllTemplates
{
    private const OPERATION_ID = 'gitignore/get-all-templates';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/gitignore/templates?'));
    }
    function validateResponse()
    {
    }
}
