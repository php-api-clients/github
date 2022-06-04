<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations;

final class DeleteGrant_
{
    private const OPERATION_ID = 'oauth-authorizations/delete-grant';
    /**The unique identifier of the grant.**/
    public int $grant_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($grant_id)
    {
        $this->grant_id = $grant_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{grant_id}'), array($this->grant_id), '/applications/grants/{grant_id}'));
    }
    function validateResponse()
    {
    }
}
