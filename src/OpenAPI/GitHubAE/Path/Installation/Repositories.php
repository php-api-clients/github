<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallationOperation;

final class Repositories
{
    function get(int $per_page = 30, int $page = 1): ListReposAccessibleToInstallationOperation
    {
        return new ListReposAccessibleToInstallationOperation($per_page, $page);
    }
}
