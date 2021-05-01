<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin;

final class DeleteImpersonationOAuthToken
{
    private const OPERATION_ID = 'enterprise-admin/delete-impersonation-o-auth-token';
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username)
    {
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{username}'), array($this->username), '/admin/users/{username}/authorizations?'));
    }
    function validateResponse()
    {
    }
}
