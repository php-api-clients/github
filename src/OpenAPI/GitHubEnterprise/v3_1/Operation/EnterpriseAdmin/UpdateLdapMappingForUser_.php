<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class UpdateLdapMappingForUser_
{
    private const OPERATION_ID = 'enterprise-admin/update-ldap-mapping-for-user';
    /**The handle for the GitHub user account.**/
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{username}'), array($this->username), '/admin/ldap/users/{username}/mapping?'));
    }
    function validateResponse()
    {
    }
}
