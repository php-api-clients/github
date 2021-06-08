<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ListInstallationReposForAuthenticatedUser;

final class Repositories
{
    function get($installation_id, int $per_page = 30, int $page = 1): ListInstallationReposForAuthenticatedUser
    {
        return new ListInstallationReposForAuthenticatedUser($installation_id, $per_page, $page);
    }
}
