<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Admin\Ldap\Teams\CbTeamIdRcb;

final class Sync
{
    function post($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\SyncLdapMappingForTeam
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\SyncLdapMappingForTeam($team_id);
    }
}
