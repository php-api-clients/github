<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListForAuthenticatedUser;

final class Teams
{
    function get(int $per_page = 30, int $page = 1): ListForAuthenticatedUser
    {
        return new ListForAuthenticatedUser($per_page, $page);
    }
}
