<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

final class CreateForAuthenticatedUser_
{
    private const OPERATION_ID = 'repos/create-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/user/repos?'));
    }
    function validateResponse()
    {
    }
}
