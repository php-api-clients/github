<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\TeamSync;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsForOrgOperation;

final class Groups
{
    function get($org, int $per_page = 30, $page): ListIdpGroupsForOrgOperation
    {
        return new ListIdpGroupsForOrgOperation($org, $per_page, $page);
    }
}
