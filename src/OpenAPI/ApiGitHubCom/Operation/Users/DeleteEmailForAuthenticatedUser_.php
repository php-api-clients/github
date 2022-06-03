<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class DeleteEmailForAuthenticatedUser_
{
    private const OPERATION_ID = 'users/delete-email-for-authenticated-user';
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
