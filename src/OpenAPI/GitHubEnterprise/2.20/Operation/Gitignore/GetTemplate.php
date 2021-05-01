<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Gitignore;

final class GetTemplate
{
    private const OPERATION_ID = 'gitignore/get-template';
    /****/
    public string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($name)
    {
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{name}'), array($this->name), '/gitignore/templates/{name}?'));
    }
    function validateResponse()
    {
    }
}
