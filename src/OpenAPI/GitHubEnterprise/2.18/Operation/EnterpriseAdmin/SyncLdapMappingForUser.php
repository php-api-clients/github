<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin;

final class SyncLdapMappingForUser
{
    private const OPERATION_ID = 'enterprise-admin/sync-ldap-mapping-for-user';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{username}'), array($this->username), '/admin/ldap/users/{username}/sync?'));
    }
    function validateResponse()
    {
    }
}
