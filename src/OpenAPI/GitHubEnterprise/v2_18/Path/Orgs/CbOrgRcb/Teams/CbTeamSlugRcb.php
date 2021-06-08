<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetByName;

final class CbTeamSlugRcb
{
    function get($org, $team_slug): GetByName
    {
        return new GetByName($org, $team_slug);
    }
}
