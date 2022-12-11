<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations;

final class GetGrant_
{
    private const OPERATION_ID = 'oauth-authorizations/get-grant';
    /**The unique identifier of the grant.**/
    private readonly int $grant_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $grant_id)
    {
        $this->grant_id = $grant_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{grant_id}'), array($this->grant_id), '/applications/grants/{grant_id}'));
    }
    function validateResponse()
    {
    }
}
