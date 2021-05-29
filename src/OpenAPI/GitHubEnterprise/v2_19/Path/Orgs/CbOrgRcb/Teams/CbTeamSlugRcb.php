<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Orgs\CbOrgRcb\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetByNameOperation;

final class CbTeamSlugRcb
{
    function get($org, $team_slug): GetByNameOperation
    {
        return new GetByNameOperation($org, $team_slug);
    }
}
