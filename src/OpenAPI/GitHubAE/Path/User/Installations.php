<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUserOperation;

final class Installations
{
    function get(int $per_page = 30, int $page = 1): ListInstallationsForAuthenticatedUserOperation
    {
        return new ListInstallationsForAuthenticatedUserOperation($per_page, $page);
    }
}
