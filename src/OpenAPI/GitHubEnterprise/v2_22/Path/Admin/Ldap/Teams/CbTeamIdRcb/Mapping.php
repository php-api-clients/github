<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Ldap\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam;

final class Mapping
{
    function patch($team_id): UpdateLdapMappingForTeam
    {
        return new UpdateLdapMappingForTeam($team_id);
    }
}
