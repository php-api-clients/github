<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations;

final class StartForAuthenticatedUser_
{
    private const OPERATION_ID = 'migrations/start-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/user/migrations?'));
    }
    function validateResponse()
    {
    }
}
