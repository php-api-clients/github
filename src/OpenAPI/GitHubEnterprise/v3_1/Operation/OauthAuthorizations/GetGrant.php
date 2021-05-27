<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations;

final class GetGrant
{
    private const OPERATION_ID = 'oauth-authorizations/get-grant';
    /**grant_id parameter**/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{grant_id}'), array($this->grant_id), '/applications/grants/{grant_id}?'));
    }
    function validateResponse()
    {
    }
}
