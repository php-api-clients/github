<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin\Ldap\Teams\CbTeamIdRcb;

final class Sync
{
    function post($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SyncLdapMappingForTeamOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SyncLdapMappingForTeamOperation($team_id);
    }
}
