<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

final class DeletePersonalAccessToken_
{
    private const OPERATION_ID = 'enterprise-admin/delete-personal-access-token';
    /****/
    public int $token_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($token_id)
    {
        $this->token_id = $token_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{token_id}'), array($this->token_id), '/admin/tokens/{token_id}?'));
    }
    function validateResponse()
    {
    }
}
