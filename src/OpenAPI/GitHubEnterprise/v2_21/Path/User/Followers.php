<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\ListFollowersForAuthenticatedUserOperation;

final class Followers
{
    function get(int $per_page = 30, int $page = 1): ListFollowersForAuthenticatedUserOperation
    {
        return new ListFollowersForAuthenticatedUserOperation($per_page, $page);
    }
}
