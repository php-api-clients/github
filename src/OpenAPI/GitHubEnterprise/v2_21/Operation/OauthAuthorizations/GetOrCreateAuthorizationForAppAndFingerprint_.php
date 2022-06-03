<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\OauthAuthorizations;

final class GetOrCreateAuthorizationForAppAndFingerprint_
{
    private const OPERATION_ID = 'oauth-authorizations/get-or-create-authorization-for-app-and-fingerprint';
    /**The client ID of your GitHub app.**/
    public string $client_id;
    /****/
    public string $fingerprint;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($client_id, $fingerprint)
    {
        $this->client_id = $client_id;
        $this->fingerprint = $fingerprint;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{client_id}', '{fingerprint}'), array($this->client_id, $this->fingerprint), '/authorizations/clients/{client_id}/{fingerprint}?'));
    }
    function validateResponse()
    {
    }
}
