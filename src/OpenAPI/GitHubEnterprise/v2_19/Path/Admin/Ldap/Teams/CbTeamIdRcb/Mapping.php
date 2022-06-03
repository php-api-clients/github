<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Admin\Ldap\Teams\CbTeamIdRcb;

final class Mapping
{
    function patch($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam($team_id);
    }
}
