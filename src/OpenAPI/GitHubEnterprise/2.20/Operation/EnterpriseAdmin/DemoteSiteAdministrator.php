<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin;

final class DemoteSiteAdministrator
{
    private const OPERATION_ID = 'enterprise-admin/demote-site-administrator';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{username}'), array($this->username), '/users/{username}/site_admin?'));
    }
    function validateResponse()
    {
    }
}
