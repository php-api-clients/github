<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\ListFollowedByAuthenticated;

final class Following
{
    function get(int $per_page = 30, int $page = 1): ListFollowedByAuthenticated
    {
        return new ListFollowedByAuthenticated($per_page, $page);
    }
}
