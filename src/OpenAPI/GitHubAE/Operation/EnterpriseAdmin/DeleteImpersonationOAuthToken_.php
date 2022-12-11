<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class DeleteImpersonationOAuthToken_
{
    private const OPERATION_ID = 'enterprise-admin/delete-impersonation-o-auth-token';
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $username)
    {
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{username}'), array($this->username), '/admin/users/{username}/authorizations'));
    }
    function validateResponse()
    {
    }
}
