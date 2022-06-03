<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations;

final class RevokeGrantForApplication_
{
    private const OPERATION_ID = 'oauth-authorizations/revoke-grant-for-application';
    /**The client ID of your GitHub app.**/
    public string $client_id;
    /****/
    public string $access_token;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($client_id, $access_token)
    {
        $this->client_id = $client_id;
        $this->access_token = $access_token;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{client_id}', '{access_token}'), array($this->client_id, $this->access_token), '/applications/{client_id}/grants/{access_token}?'));
    }
    function validateResponse()
    {
    }
}
