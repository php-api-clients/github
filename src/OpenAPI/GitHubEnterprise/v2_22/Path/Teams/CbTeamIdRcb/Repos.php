<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\ListReposLegacyOperation;

final class Repos
{
    function get($team_id, int $per_page = 30, int $page = 1): ListReposLegacyOperation
    {
        return new ListReposLegacyOperation($team_id, $per_page, $page);
    }
}
