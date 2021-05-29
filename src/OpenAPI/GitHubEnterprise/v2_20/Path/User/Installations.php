<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\ListInstallationsForAuthenticatedUserOperation;

final class Installations
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1): ListInstallationsForAuthenticatedUserOperation
    {
        return new ListInstallationsForAuthenticatedUserOperation($accept, $per_page, $page);
    }
}
