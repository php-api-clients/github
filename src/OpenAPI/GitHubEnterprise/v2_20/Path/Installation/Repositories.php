<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\ListReposAccessibleToInstallationOperation;

final class Repositories
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1): ListReposAccessibleToInstallationOperation
    {
        return new ListReposAccessibleToInstallationOperation($accept, $per_page, $page);
    }
}
