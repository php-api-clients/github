<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildInOrgOperation;

final class Teams
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1): ListChildInOrgOperation
    {
        return new ListChildInOrgOperation($org, $team_slug, $per_page, $page);
    }
}
