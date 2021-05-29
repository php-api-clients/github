<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\ListInstallationReposForAuthenticatedUserOperation;

final class Repositories
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id, int $per_page = 30, int $page = 1): ListInstallationReposForAuthenticatedUserOperation
    {
        return new ListInstallationReposForAuthenticatedUserOperation($accept, $installation_id, $per_page, $page);
    }
}
