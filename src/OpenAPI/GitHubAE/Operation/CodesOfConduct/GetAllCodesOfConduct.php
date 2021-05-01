<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct;

final class GetAllCodesOfConduct
{
    private const OPERATION_ID = 'codes-of-conduct/get-all-codes-of-conduct';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/codes_of_conduct?'));
    }
    function validateResponse()
    {
    }
}
