<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListRepos;

final class Repos
{
    function get($team_id, int $per_page = 30, int $page = 1): ListRepos
    {
        return new ListRepos($team_id, $per_page, $page);
    }
}
