<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class PromoteUserToBeSiteAdministrator
{
    private const OPERATION_ID = 'enterprise-admin/promote-user-to-be-site-administrator';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{username}'), array($this->username), '/users/{username}/site_admin?'));
    }
    function validateResponse()
    {
    }
}
