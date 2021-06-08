<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ListReposAccessibleToInstallation;

final class Repositories
{
    function get(int $per_page = 30, int $page = 1): ListReposAccessibleToInstallation
    {
        return new ListReposAccessibleToInstallation($per_page, $page);
    }
}
