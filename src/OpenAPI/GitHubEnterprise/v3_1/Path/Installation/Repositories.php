<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListReposAccessibleToInstallationOperation;

final class Repositories
{
    function get(int $per_page = 30, int $page = 1): ListReposAccessibleToInstallationOperation
    {
        return new ListReposAccessibleToInstallationOperation($per_page, $page);
    }
}
