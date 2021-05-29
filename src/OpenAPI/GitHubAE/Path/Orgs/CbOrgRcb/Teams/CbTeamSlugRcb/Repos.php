<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposInOrgOperation;

final class Repos
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1): ListReposInOrgOperation
    {
        return new ListReposInOrgOperation($org, $team_slug, $per_page, $page);
    }
}
