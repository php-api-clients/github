<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\OauthAuthorizations;

final class DeleteAuthorization_
{
    private const OPERATION_ID = 'oauth-authorizations/delete-authorization';
    /**authorization_id parameter**/
    public int $authorization_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($authorization_id)
    {
        $this->authorization_id = $authorization_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{authorization_id}'), array($this->authorization_id), '/authorizations/{authorization_id}'));
    }
    function validateResponse()
    {
    }
}
