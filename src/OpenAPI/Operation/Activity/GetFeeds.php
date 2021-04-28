<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Activity;

final class GetFeeds
{
    private const OPERATION_ID = 'activity/get-feeds';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/feeds?'));
    }
    function validateResponse()
    {
    }
}
