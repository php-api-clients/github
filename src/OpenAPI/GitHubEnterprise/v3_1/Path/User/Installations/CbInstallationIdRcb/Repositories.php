<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListInstallationReposForAuthenticatedUserOperation;

final class Repositories
{
    function get($installation_id, int $per_page = 30, int $page = 1): ListInstallationReposForAuthenticatedUserOperation
    {
        return new ListInstallationReposForAuthenticatedUserOperation($installation_id, $per_page, $page);
    }
}
