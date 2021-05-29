<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\ListReposAccessibleToInstallation;

final class Repositories
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1): ListReposAccessibleToInstallation
    {
        return new ListReposAccessibleToInstallation($accept, $per_page, $page);
    }
}
