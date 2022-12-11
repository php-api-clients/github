<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses;

final class Get_
{
    private const OPERATION_ID = 'licenses/get';
    private readonly string $license;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $license)
    {
        $this->license = $license;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{license}'), array($this->license), '/licenses/{license}'));
    }
    function validateResponse()
    {
    }
}
