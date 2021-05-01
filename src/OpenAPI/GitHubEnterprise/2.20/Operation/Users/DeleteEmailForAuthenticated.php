<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Users;

final class DeleteEmailForAuthenticated
{
    private const OPERATION_ID = 'users/delete-email-for-authenticated';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array(), array(), '/user/emails?'));
    }
    function validateResponse()
    {
    }
}
