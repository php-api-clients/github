<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\ListChildOperation;

final class Teams
{
    function get($team_id, int $per_page = 30, int $page = 1): ListChildOperation
    {
        return new ListChildOperation($team_id, $per_page, $page);
    }
}
