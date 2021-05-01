<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Apps;

final class CheckAuthorization
{
    private const OPERATION_ID = 'apps/check-authorization';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{client_id}', '{access_token}'), array($this->client_id, $this->access_token), '/applications/{client_id}/tokens/{access_token}?'));
    }
    function validateResponse()
    {
    }
}
