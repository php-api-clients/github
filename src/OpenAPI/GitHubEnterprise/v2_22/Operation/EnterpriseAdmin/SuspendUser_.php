<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

final class SuspendUser_
{
    private const OPERATION_ID = 'enterprise-admin/suspend-user';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{username}'), array($this->username), '/users/{username}/suspended?'));
    }
    function validateResponse()
    {
    }
}
