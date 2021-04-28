<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Users;

final class SetPrimaryEmailVisibilityForAuthenticated
{
    private const OPERATION_ID = 'users/set-primary-email-visibility-for-authenticated';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array(), array(), '/user/email/visibility?'));
    }
    function validateResponse()
    {
    }
}
