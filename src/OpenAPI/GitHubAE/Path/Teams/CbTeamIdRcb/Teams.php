<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildLegacyOperation;

final class Teams
{
    function get($team_id, int $per_page = 30, int $page = 1): ListChildLegacyOperation
    {
        return new ListChildLegacyOperation($team_id, $per_page, $page);
    }
}
