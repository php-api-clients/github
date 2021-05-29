<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin\Ldap\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\UpdateLdapMappingForTeamOperation;

final class Mapping
{
    function patch($team_id): UpdateLdapMappingForTeamOperation
    {
        return new UpdateLdapMappingForTeamOperation($team_id);
    }
}
