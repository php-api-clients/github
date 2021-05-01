<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path\\Admin\Ldap\Teams\CbTeamIdRcb;

final class Sync
{
    function post($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\EnterpriseAdmin\SyncLdapMappingForTeamOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\EnterpriseAdmin\SyncLdapMappingForTeamOperation($team_id);
    }
}
