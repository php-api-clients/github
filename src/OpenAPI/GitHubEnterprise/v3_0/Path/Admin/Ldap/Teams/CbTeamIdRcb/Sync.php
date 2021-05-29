<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin\Ldap\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SyncLdapMappingForTeamOperation;

final class Sync
{
    function post($team_id): SyncLdapMappingForTeamOperation
    {
        return new SyncLdapMappingForTeamOperation($team_id);
    }
}
