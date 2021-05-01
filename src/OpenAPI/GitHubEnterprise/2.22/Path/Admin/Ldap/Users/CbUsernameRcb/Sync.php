<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path\\Admin\Ldap\Users\CbUsernameRcb;

final class Sync
{
    function post($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\EnterpriseAdmin\SyncLdapMappingForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\EnterpriseAdmin\SyncLdapMappingForUserOperation($username);
    }
}
