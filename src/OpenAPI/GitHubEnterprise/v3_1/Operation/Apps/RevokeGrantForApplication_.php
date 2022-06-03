<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

final class RevokeGrantForApplication_
{
    private const OPERATION_ID = 'apps/revoke-grant-for-application';
    /**The client ID of the GitHub app.**/
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
