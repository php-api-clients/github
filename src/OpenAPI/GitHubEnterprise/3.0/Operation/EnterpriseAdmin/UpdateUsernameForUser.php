<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin;

final class UpdateUsernameForUser
{
    private const OPERATION_ID = 'enterprise-admin/update-username-for-user';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{username}'), array($this->username), '/admin/users/{username}?'));
    }
    function validateResponse()
    {
    }
}
