<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\CreateForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\ListForOrg;

final class Projects
{
    function get($org, string $state = 'open', int $per_page = 30, int $page = 1): ListForOrg
    {
        return new ListForOrg($org, $state, $per_page, $page);
    }

    function post($org): CreateForOrg
    {
        return new CreateForOrg($org);
    }
}
