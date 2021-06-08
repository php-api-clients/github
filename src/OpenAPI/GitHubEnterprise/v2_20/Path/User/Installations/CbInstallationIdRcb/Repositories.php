<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\ListInstallationReposForAuthenticatedUser;

final class Repositories
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id, int $per_page = 30, int $page = 1): ListInstallationReposForAuthenticatedUser
    {
        return new ListInstallationReposForAuthenticatedUser($accept, $installation_id, $per_page, $page);
    }
}
