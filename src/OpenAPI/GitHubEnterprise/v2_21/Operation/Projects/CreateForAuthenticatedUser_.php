<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects;

final class CreateForAuthenticatedUser_
{
    private const OPERATION_ID = 'projects/create-for-authenticated-user';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/user/projects?'));
    }
    function validateResponse()
    {
    }
}
