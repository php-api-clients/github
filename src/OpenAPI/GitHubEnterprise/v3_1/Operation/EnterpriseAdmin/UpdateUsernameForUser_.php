<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class UpdateUsernameForUser_
{
    private const OPERATION_ID = 'enterprise-admin/update-username-for-user';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{username}'), array($this->username), '/admin/users/{username}'));
    }
    function validateResponse()
    {
    }
}
