<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin\Ldap\Users\CbUsernameRcb;

final class Sync
{
    function post($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SyncLdapMappingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SyncLdapMappingForUser($username);
    }
}
