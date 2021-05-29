<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposLegacy;

final class Repos
{
    function get($team_id, int $per_page = 30, int $page = 1): ListReposLegacy
    {
        return new ListReposLegacy($team_id, $per_page, $page);
    }
}
