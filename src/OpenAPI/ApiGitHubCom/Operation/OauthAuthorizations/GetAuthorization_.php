<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations;

final class GetAuthorization_
{
    private const OPERATION_ID = 'oauth-authorizations/get-authorization';
    /**The unique identifier of the authorization.**/
    public int $authorization_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($authorization_id)
    {
        $this->authorization_id = $authorization_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{authorization_id}'), array($this->authorization_id), '/authorizations/{authorization_id}'));
    }
    function validateResponse()
    {
    }
}
