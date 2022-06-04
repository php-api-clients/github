<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\OauthAuthorizations;

final class CreateAuthorization_
{
    private const OPERATION_ID = 'oauth-authorizations/create-authorization';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/authorizations'));
    }
    function validateResponse()
    {
    }
}
