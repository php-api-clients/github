<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUser;

final class Repositories
{
    function get($installation_id, int $per_page = 30, int $page = 1): ListInstallationReposForAuthenticatedUser
    {
        return new ListInstallationReposForAuthenticatedUser($installation_id, $per_page, $page);
    }
}
