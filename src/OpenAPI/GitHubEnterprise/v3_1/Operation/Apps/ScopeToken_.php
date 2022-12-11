<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

final class ScopeToken_
{
    private const OPERATION_ID = 'apps/scope-token';
    /**The client ID of the GitHub app.**/
    private readonly string $client_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $client_id)
    {
        $this->client_id = $client_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{client_id}'), array($this->client_id), '/applications/{client_id}/token/scoped'));
    }
    function validateResponse()
    {
    }
}
