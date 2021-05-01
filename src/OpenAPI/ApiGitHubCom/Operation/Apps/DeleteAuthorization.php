<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

final class DeleteAuthorization
{
    private const OPERATION_ID = 'apps/delete-authorization';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{client_id}'), array($this->client_id), '/applications/{client_id}/grant?'));
    }
    function validateResponse()
    {
    }
}