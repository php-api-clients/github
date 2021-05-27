<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Admin\Ldap\Users\CbUsernameRcb;

final class Sync
{
    function post($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForUserOperation($username);
    }
}
