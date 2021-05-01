<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Apps;

final class CreateFromManifest
{
    private const OPERATION_ID = 'apps/create-from-manifest';
    /****/
    public string $code;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($code)
    {
        $this->code = $code;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{code}'), array($this->code), '/app-manifests/{code}/conversions?'));
    }
    function validateResponse()
    {
    }
}
