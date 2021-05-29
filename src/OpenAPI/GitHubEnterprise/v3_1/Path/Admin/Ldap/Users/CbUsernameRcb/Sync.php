<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\Ldap\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForUserOperation;

final class Sync
{
    function post($username): SyncLdapMappingForUserOperation
    {
        return new SyncLdapMappingForUserOperation($username);
    }
}
