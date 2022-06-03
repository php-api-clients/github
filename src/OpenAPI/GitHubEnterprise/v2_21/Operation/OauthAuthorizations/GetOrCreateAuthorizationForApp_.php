<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\OauthAuthorizations;

final class GetOrCreateAuthorizationForApp_
{
    private const OPERATION_ID = 'oauth-authorizations/get-or-create-authorization-for-app';
    /**The client ID of your GitHub app.**/
    public string $client_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($client_id)
    {
        $this->client_id = $client_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{client_id}'), array($this->client_id), '/authorizations/clients/{client_id}?'));
    }
    function validateResponse()
    {
    }
}
