<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\CodesOfConduct;

final class GetConductCode_
{
    private const OPERATION_ID = 'codes-of-conduct/get-conduct-code';
    /****/
    public string $key;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($key)
    {
        $this->key = $key;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{key}'), array($this->key), '/codes_of_conduct/{key}'));
    }
    function validateResponse()
    {
    }
}
