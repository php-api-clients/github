<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildInOrg;

final class Teams
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1): ListChildInOrg
    {
        return new ListChildInOrg($org, $team_slug, $per_page, $page);
    }
}
