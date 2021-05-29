<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Admin\Ldap\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\SyncLdapMappingForUser;

final class Sync
{
    function post($username): SyncLdapMappingForUser
    {
        return new SyncLdapMappingForUser($username);
    }
}
