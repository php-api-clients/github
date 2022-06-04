<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations;

final class UpdateAuthorization_
{
    private const OPERATION_ID = 'oauth-authorizations/update-authorization';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{authorization_id}'), array($this->authorization_id), '/authorizations/{authorization_id}'));
    }
    function validateResponse()
    {
    }
}
