<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Admin\Ldap\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\SyncLdapMappingForTeam;

final class Sync
{
    function post($team_id): SyncLdapMappingForTeam
    {
        return new SyncLdapMappingForTeam($team_id);
    }
}
