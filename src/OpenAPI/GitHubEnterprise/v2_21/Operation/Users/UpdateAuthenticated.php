<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users;

final class UpdateAuthenticated
{
    private const OPERATION_ID = 'users/update-authenticated';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array(), array(), '/user?'));
    }
    function validateResponse()
    {
    }
}