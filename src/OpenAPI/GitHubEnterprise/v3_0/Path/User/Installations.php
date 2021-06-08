<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ListInstallationsForAuthenticatedUser;

final class Installations
{
    function get(int $per_page = 30, int $page = 1): ListInstallationsForAuthenticatedUser
    {
        return new ListInstallationsForAuthenticatedUser($per_page, $page);
    }
}
