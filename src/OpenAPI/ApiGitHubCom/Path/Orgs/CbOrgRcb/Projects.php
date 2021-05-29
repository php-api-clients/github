<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrgOperation;

final class Projects
{
    function get($org, string $state = 'open', int $per_page = 30, int $page = 1): ListForOrgOperation
    {
        return new ListForOrgOperation($org, $state, $per_page, $page);
    }

    function post($org): CreateForOrgOperation
    {
        return new CreateForOrgOperation($org);
    }
}
